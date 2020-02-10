<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	  // function __construct()
	  //   {
	  //       parent::__construct();
	  //       auth();
	  //   }

	public function index()
	{
		$tahun=2020;

		$query='select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from kegiatan where  tahun='.$tahun;

		$data=query($this,$query);
		if(count($data)>0){
			$data=$data[0];
		}

		$data_return=[];

		$query='select count(*) jumlah_pdam from sat where period_tahun='.$tahun;

		$data2=query($this,$query);
		if(count($data2)>0){
			$data2=$data2[0];
		}
		$query="select  d.id,(select CASE WHEN sum(k.anggaran) > 0 THEN sum(k.anggaran) ELSE 0 END from kegiatan as k where k.kode_daerah ilike  d.id || '%' and k.tahun = ".$tahun.")::numeric as value from master_daerah as d where d.kode_daerah_parent is null order by value DESC";
		$data5=query($this,$query);
		foreach ($data5 as $key => $value) {
			$data5[$key]=[$value['id'],$value['value']];
		}

		$max=$data5[0][1];
		$min=$data5[0][1];

		array_walk($data5,function($value) use(&$min) {
			if($value[1]!=0){
				$min=min($value[1],$min);
			}
		});

		$d=array('title'=>'Dashboard','data'=>$data,'data2'=>$data2,'anggaran'=>$data5,'tahun'=>$tahun,'max_anggran'=> $max,'min_anggran'=> $min);

	   $d=view('pages.index',$d
	   	);


	}

	public function t(){
		return view('index');

	}

	public function keuangan_pu(){
		return view('keuangan_pu',['title'=>'Profile PU']);
	}

}
