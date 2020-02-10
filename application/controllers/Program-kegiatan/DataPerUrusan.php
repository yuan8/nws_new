<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataperurusan extends CI_Controller {

	public function index(){

		return view('helper.map2');
	}

	public function perurusan(){

		$tahun=TAHUN();

		$title="PROGRAM KEGIATAN PERURUSAN";

		$pie="select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=".$tahun." )

			 as jumlah_kegiatan

		from program as p where p.tahun=".$tahun;
		$rekap_program_kegiatan=query($this,$pie,'con2')[0];


		$pendukung="select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=".$tahun;
		$rekap_program_kegiatan_pendukung=query($this,$pendukung,'con2')[0];

		$query="
		select 
			u.id,
			CONCAT('{id_urusan:',u.id,'}') as selected,
			CONCAT('".rt('/program-kegiatan/per-daerah/dataperurusan/detail')."/',u.id) as link,
			CONCAT('".rt('/program-kegiatan/dataperurusan/persuburusan')."/',u.id) as next,
			min(nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan = u.id and p.tahun=".$tahun.") as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan = u.id and k.tahun=".$tahun.") as jumlah_kegiatan
			from master_urusan as u
		

		GROUP BY u.id ORDER BY jumlah_kegiatan DESC
		";


		$data=query($this,$query,'con2');

		echo view('helper.chart',[
			'data'=>$data,
			'title'=>$title,
			'rekap_program_kegiatan'=>$rekap_program_kegiatan,
			'rekap_program_kegiatan_pendukung'=>$rekap_program_kegiatan_pendukung,
			'id_dom'=>'perurusan_0_'
		]);


	}


	public function persuburusan($urusan){

		$tahun=TAHUN();

		$title="select nama from master_urusan where id=".$urusan;

		$title='PROGRAM KEGIATAN PER SUBURUSAN, '.query($this,$title,'con2')[0]['nama'];

		$pie="select count(DISTINCT(p.kode_program)) as jumlah_program ,

		(	select 
			count(DISTINCT(CONCAT(k.kode_daerah,k.kode_kegiatan))) as jumlah_kegiatan 
			from kegiatan as k   
			where k.tahun=".$tahun." and k.id_urusan = ".$urusan.")

			 as jumlah_kegiatan

		from program as p where p.tahun=".$tahun." and p.id_urusan = ".$urusan."";
		$rekap_program_kegiatan=query($this,$pie,'con2')[0];


		$pendukung="select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=".$tahun." and k.id_urusan  = ".$urusan."";

		$rekap_program_kegiatan_pendukung=query($this,$pendukung,'con2')[0];



		$query="
		select 
			su.id,
			CONCAT('{id_urusan:',".$urusan.",',id_sub_urusan:',su.id,'}') as selected,
			CONCAT('".rt('/program-kegiatan/per-daerah/dataperurusan/detail/')."',".$urusan.",'/',su.id) as link,


			min(su.nama) as nama,
			(select count(DISTINCT(p.kode_program)) from program as p where p.id_urusan=".$urusan." and p.id_sub_urusan= (su.id) and p.tahun=".$tahun.") as jumlah_program,
			(select count(DISTINCT(k.kode_kegiatan)) from kegiatan  as k where k.id_urusan=".$urusan." and k.id_sub_urusan = (su.id) and k.tahun=".$tahun.") as jumlah_kegiatan
			from master_sub_urusan as su
			where  
			su.id_urusan =".$urusan."

		GROUP BY su.id ORDER BY jumlah_kegiatan DESC
		";


		$data=query($this,$query,'con2');

		echo view('helper.chart',[
			'data'=>$data,
			'title'=>$title,
			'rekap_program_kegiatan'=>$rekap_program_kegiatan,
			'rekap_program_kegiatan_pendukung'=>$rekap_program_kegiatan_pendukung,
			'id_dom'=>'perkota_1_'
		]);

	}


}