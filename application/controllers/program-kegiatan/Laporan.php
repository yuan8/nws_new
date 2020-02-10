<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


	function index($kode_daerah=null){

			$tahun=TAHUN();
		$nama="select nama from master_daerah where id='".$kode_daerah."'";
		$nama=query($this,$nama,'con2')[0];
		$nama=$nama['nama'];

		$anggaran="select * from anggaran_kegiatan_perdaerah where kode_daerah='".$kode_daerah."' and tahun =".$tahun;
		$anggaran= query($this,$anggaran,'con2');
		if(isset($anggaran[0])){
			$anggaran=$anggaran[0]['anggaran'];
		}else{
			$anggaran=0;
		}


		if($kode_daerah){

			$query="select 
				(select nama from master_urusan where id = k.id_urusan) as urusan,
				(select sum(anggaran) from kegiatan where id_urusan = k.id_urusan and kode_daerah='".$kode_daerah."' and tahun=".$tahun.") as total_anggaran_urusan,
				(select nama from master_sub_urusan where id = k.id_sub_urusan) as sub_urusan,
				(select sum(anggaran) from kegiatan where id_sub_urusan = k.id_sub_urusan and kode_daerah='".$kode_daerah."'and tahun=".$tahun.") as total_anggaran_sub_urusan,

					p.uraian as program,
					(select sum(anggaran) from kegiatan where id_program=p.id and kode_daerah='".$kode_daerah."' and tahun=".$tahun." ) as total_anggaran_program,

					k.*,

            	(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
		            from  indikator_program as i
		            where i.id_program= p.id
		          ) as indikator_program,


		        (select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
		            from  indikator_kegiatan as i
		            where i.id_kegiatan= k.id
		          ) as indikator_kegiatan


		          from kegiatan as k
				 
				 left join program as p on p.id = k.id_program 
				 where k.tahun = ".$tahun." and k.kode_daerah='".$kode_daerah."'

				 ORDER BY k.id_urusan,k.id_sub_urusan,k.id_program ASC
			 ";

			 $data=query($this,$query,'con2');
			}

			  return view('helper.data.program_kegiatan_table',['data'=>$data,'tahun'=>$tahun,'nama'=>$nama,'anggaran_total'=>$anggaran]);

	}


	function data($kode_daerah=null){
		$tahun=TAHUN();
		$nama="select nama from master_daerah where id='".$kode_daerah."'";
		$nama=query($this,$nama,'con2')[0];
		$nama=$nama['nama'];

		if($nama){
			 return view('helper.data.program_kegiatan',['tahun'=>$tahun,'nama'=>$nama,'kode_daerah'=>$kode_daerah]);


		}else{

		}
	}
}