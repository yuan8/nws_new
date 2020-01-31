<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdam extends CI_Controller {

  public function index(){

  $query="select i.* from (select max(id) as id from public.data_input group by kode_daerah order by max(tanggal) DESC
  )as k
  join public.data_input as i on i.id = k.id  order by i.tahun DESC";

  	$data=query($this,$query);

    return view('pages.pdam',['data'=>$data]);

  }

   public function nuwas(){

    $query=" select i.* from (select max(id) as id from public.data_input group by kode_daerah order by max(tanggal) DESC
)as k
join public.data_input as i on i.id = k.id  where kode_daerah in ('1207','1373','1472','1403','1709','3202','3311','3572','3524','3502','6301','7172')  
    order by tahun DESC";
    $data=query($this,$query);

    return view('pages.pdam',['data'=>$data]);

  }


  public function detail($id){

    $query="select * from data_input where id = ".$id;
    $data=query($this,$query);

    if(isset($data[0])){
      $kode_daerah=$data[0]['kode_daerah'];

       $query="select * from data_input where kode_daerah = '".$kode_daerah."' and id <> ".$id;
      $archive=query($this,$query);



      return view('pages.pdam_detail',['data'=>$data[0],'archive'=>$archive]);

    }
  }
}
