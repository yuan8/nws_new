<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdam extends CI_Controller {

  public function index(){

  	$query="select * from data_input";
  	$data=query($this,$query);

    return view('pages.pdam',['data'=>$data]);

  }


  public function detail($id){

    $query="select * from data_input where id = ".$id;
    $data=query($this,$query);

    if(isset($data[0])){
    return view('pages.pdam_detail',['data'=>$data[0]]);

    }
  }
}
