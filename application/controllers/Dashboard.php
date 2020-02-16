<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	  // function __construct()
	  //   {
	  //       parent::__construct();
	  //       auth();
	  //   }


	static function simbol($nilai){
		switch ($nilai) {
			case 1:
				return 'triangle';
				break;
			case 0:
				return 'circle';
				break;
			case -1:
				return 'triangle-down';
				break;
			
			default:
				# code...
				break;
		}
	}

	static function color($nilai){
		switch ($nilai) {
			case 'SAKIT':
			return 'red';
				# code...
				break;

			case 'KURANG SEHAT':
			return 'orange';
				# code...
				break;

			case 'POTENSIAL UNTUK SEHAT':
			return 'warning';
				# code...
				break;
			
			case 'SEHAT':
			return 'green';
				# code...
				break;
			case 'SEHAT BERKELANJUTAN':
			return 'blue';
				# code...
				break;
			
			default:
				# code...
				break;
		}
	}

	public function index()
	{
		$tahun=2020;

		$query='select count(*) jumlah_kegiatan, sum(anggaran) as jumlah_anggaran from kegiatan where  tahun='.$tahun;

		$data=query($this,$query);
		if(count($data)>0){
			$data=$data[0];
		}

	
		$data_return=[];

		

		$query="select * from  pdam_profile where kordinat is not null and kordinat != '' ";
		$pdam=[];
		$pdam_db=query($this,$query);
		foreach ($pdam_db as $key => $value) {
			# code...

			$kor=explode(',', $value['kordinat']);
			if(!isset($kor[1])){
			}
			$pdam[]=array(
				'name'=>$value['nama_pdam'],
				'id'=>$value['kode_daerah'],
				'lat'=>(float)isset($kor[1])?$kor[0]:null,
				'lon'=>(float)isset($kor[1])?$kor[1]:null,
				'value'=>(int) $value['kode_penilaian_nuwas'],
				'penilaian'=>$value['penilaian_nuwas'],
				'color'=>static::color($value['penilaian_nuwas']),
				'marker'=>array(
					"enabled"=>true,
					"symbol"=>static::simbol($value['traffic_penilaian_nuwas'])
				)

				
			);
		}


		$query='select count(*) as jumlah_pdam from sat';

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

		$d=array('title'=>'Dashboard','data'=>$data,'data2'=>$data2,'anggaran'=>$data5,'tahun'=>$tahun,'max_anggran'=> $max,'min_anggran'=> $min,'pdam'=>$pdam);

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
