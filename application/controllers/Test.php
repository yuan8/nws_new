<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends CI_Controller {


  public function xxx(){
    $query="select max(satd.nilai) as nilai, max(sat.id) as id, max(d.kode_daerah), max(sat.nama_pdam) as nama_pdam,max(sat.tanggal_masukan) as tanggal_masukan,
    max(sat.keterangan_umum) as keterangan_umum 
    from master_daerah as d
    LEFT JOIN sat on sat.kode_daerah = d.kode_daerah
    LEFT JOIN sat_detail as satd on satd.id_sat = (sat.id)
    GROUP BY sat.kode_daerah ORDER BY max(tanggal_masukan)

    ";
    $data=(query($this,$query));

    dd($data);

  }

  public function index(){
    $query='select * from master_pn';
       $this->load->library('Test');
    // $this->Test->a();

 

    $data=(query($this,$query));


    return view('pages.table.pn',['data'=>$data]);
  }

  public function spm(){
    $query='select * from master_spm as spm where spm.id_urusan = 3';
    $data=(query($this,$query));


    dd($data);

    return view('pages.table.spm',['data'=>$data]);
  }

  public function sdgs(){
    $query='select * from master_sdgs ';
    $data=(query($this,$query));

    // dd($data);

    return view('pages.table.sdgs',['data'=>$data]);
  }


  public function sat(){

      $data=$_POST['data'];

      $fp = fopen('./SAT/ENCODELINK.json', 'w');
      fwrite($fp, json_encode($data,JSON_PRETTY_PRINT));
      echo 'done';
  }


  public function link(){

    return view('test.link'); 
  }

}
