<?php

if(!function_exists('rt')){
  function rt($url,$data=[]){
    if(count($data)>0){
      $data='?'.http_build_query($data);
    }else{
      $data='';
    }
    $url=base_url($url);
    return $url.$data;
  }
}


if(!function_exists('StoragePut')){

  function StoragePut($url,$file){
  	
  	$real_path=false;

  	$last_path=explode('/', $url);
  	$last_path=$last_path[count($last_path)-1];
  	if((strpos($last_path,'.') !== false)){
  		$real_path=true;

  	}


  	if(!$real_path){
  		if(substr($url, -1)!='/'){
  			$url.='/';
  		}
  	}

  	if(substr($url, 0)=='/'){
  		$url=substr($url, 1,0);
  	}
  	
  	$url=(APPPATH.'Storage/app'.$url); 	

  	if(!is_dir($url)){
  		$loop_url='';
  		$loop=explode('/',$url);
  		foreach ($loop as $key => $value) {
  			# code...
  			$loop_url.=$loop_url!=''?'/'.$value:$value;
  			if($value!=''){
  				if((!(strpos($value,'.') !== false)) OR (isset($loop[$key+1]))){
  					if(!is_dir($loop_url)){
  						mkdir($loop_url, 0750);
  					}

  				}else{

  				}
  				
  			}
  		}
  		
  	}

  	

  	if(!$real_path){
  		$target_file = $url . basename($file["name"]);
	    $extension = strtolower(pathinfo($file["name"],PATHINFO_EXTENSION));
	    $name_file=date('Y-m-d-h-i-u-a').'-'.rand(0,1000);
	    $name_file=base64_encode($name_file).'.'.$extension;
	    $name_file=str_replace('=','AAA' , $name_file);
	    $name_file=($url.$name_file);
  	}else{
  		$name_file=$url;
  	}

   
    if(move_uploaded_file($file["tmp_name"], $name_file )) {
        return 'storage'.explode('public',$name_file)[1];
    } else {
       	return false;
    }
  }
}

