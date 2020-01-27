<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdam extends CI_Controller {

  public function index(){

  	$query="select * from data_input";
  	$data=query($this,$query);

    return view('pages.pdam',['data'=>$data]);

  }

   public function nuwas(){

    $query="select * from data_input where kode_daerah in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172') order by kode_daerah,tahun DESC";
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
