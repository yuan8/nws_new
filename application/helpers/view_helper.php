<?php

use Jenssegers\Blade\Blade;
if(!function_exists('view')){
  function view($view,$data=[]){
    $path=APPPATH.'views';
    $blade=new Blade($path,$path.'/cahce');
    echo $blade->make($view,$data);
  }
}

// $GLOBALS['CI'] =  &get_instance();


if(!function_exists('CIV')){
  function CIV(){
   
	$CI = &get_instance();
    return $CI;
  }
}


if(!function_exists('withInput')){
  function withInput(){
      $data=[];
      if($_GET){
        $data=$_GET;
      }
      foreach($_POST as $key=>$d){
        $data[$key]=$d;
      }
      CIV()->session->set_flashdata('old',$data);
  }
}


if(!function_exists('old')){
  function old($data=''){
      $d=CIV()->session->flashdata('old');

      return isset($d[$data])? $d[$data]:null;
  }
}



if(!function_exists('auth')){
  function auth($data=''){
      if ( (!isset($_SESSION['status']))?(true):(($_SESSION['status']!='login'))){
        if((CIV()->router->fetch_class()=='login')&&(CIV()->router->fetch_method()=='index')){
        }else{
          redirect(rt('login'));
          return 0;
        }

      }else{
        if((CIV()->router->fetch_class()=='login')&&(CIV()->router->fetch_method()=='index')){
          redirect(rt('dashboard'));

        }
        
        if($data==''){
          return $_SESSION;
        }else{

          return $_SESSION[$data];
        }


      }

  }

}
