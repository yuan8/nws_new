<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_rkpd extends CI_Controller {

	public function index($id){
		$tahun=2020;
		if($id){
			$data="select d.id,d.nama,(select CASE WHEN count(*) > 0 THEN count(*) ELSE 0 END from program as p where p.kode_daerah=d.id and p.tahun=".$tahun.") as jumlah_program,
				(select CASE WHEN count(*) > 0 THEN count(*) ELSE 0 END from kegiatan as k where k.kode_daerah=d.id and k.tahun=".$tahun.") as jumlah_kegiatan,
				(select CASE WHEN sum(k.anggaran) > 0 THEN sum(k.anggaran) ELSE 0 END from kegiatan as k where k.kode_daerah=d.id and k.tahun=".$tahun.") as value  
			 	from master_daerah as d where d.id ilike '".$id."'||'%' order by value DESC";
			$dt=query($this,$data);
			$data=[];
			foreach ($dt as $key => $d) {
				# code...
				$data[$d['id']]=$d;
			}
			$max=$dt[0]['value'];
			$min=$dt[0]['value'];

			array_walk($dt,function($value) use(&$min) {
				if($value['value']!=0){
					$min=min($value['value'],$min);
				}
			});


			$data_provinsi=$data[$id];

			return view('pages.perdaerah.data_rkpd',[
				'id'=>$id,'data'=>$dt,
				'data_provinsi'=>$data_provinsi,
				'max_anggaran'=>$max,
				'min_anggaran'=>$min]);
		}
		
	}


}