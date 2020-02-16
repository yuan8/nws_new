<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {


	 public function __construct()
	    {
	            parent::__construct();

	    }

	public function index(){


		return view('pages.anggaran.perdaerah');
	}

	public function daerah(){

		$tahun=TAHUN();

		$title="PROGRAM KEGIATAN PERPROVINSI";

		$pie="select sum(anggaran) as jumlah_anggaran_kegiatan from kegiatan as p where kode_daerah is not null and p.tahun=".$tahun." ";
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
			d.id,
			CONCAT('{kode_daerah_like:',d.id,'}') as selected,
			CONCAT('".rt('/program-kegiatan/per-daerah/data/detail_provinsi')."/',d.id) as link,
			CONCAT('".rt('/anggaran/data/perkota')."/',d.id) as next,
			min(REPLACE(d.nama,'PROVINSI','')) as nama,
			
			(select case when sum(anggaran)>0 then sum(anggaran) else 0 end from kegiatan  as k where k.kode_daerah like d.id || '%' and k.tahun=".$tahun.") as anggaran_kegiatan
			from master_daerah as d 
			where  
			d.kode_daerah_parent is null

		GROUP BY d.id ORDER BY anggaran_kegiatan DESC
		";


		$data=query($this,$query,'con2');

		echo view('pages.anggaran.chart',[
			'data'=>$data,
			'title'=>$title,
			'rekap_program_kegiatan'=>$rekap_program_kegiatan,
			'rekap_program_kegiatan_pendukung'=>$rekap_program_kegiatan_pendukung,
			'id_dom'=>'perdaerah_0_',
			'tahun'=>$tahun
		]);


	}


	public function perkota($daerah){

		$tahun=TAHUN();

		$title="select nama from master_daerah where id='".$daerah."'";

		$title=query($this,$title,'con2')[0]['nama'];

	

		$pie="select sum(anggaran) as jumlah_anggaran_kegiatan from kegiatan as p where kode_daerah is not null and p.tahun=".$tahun." and p.kode_daerah like '".$daerah."' || '%'";
		$rekap_program_kegiatan=query($this,$pie,'con2')[0];


		$pendukung="select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=".$tahun." and k.kode_daerah  like '".$daerah."' || '%'";

		$rekap_program_kegiatan_pendukung=query($this,$pendukung,'con2')[0];



		$query="
		select 
			d.id,
			CONCAT('{kode_daerah:',d.id,'}') as selected,
			CONCAT('".rt('/program-kegiatan/per-daerah/data/detail/')."',d.id) as link,
			CONCAT('".rt('/anggaran/data/perurusan/')."',d.id) as next,
			CONCAT('".rt('/program-kegiatan/laporan/data/')."',d.id) as link_laporan,

			min(d.nama) as nama,
			
			(select case when sum(anggaran)>0 then sum(anggaran) else 0 end from kegiatan  as k where k.kode_daerah = (d.id) and k.tahun=".$tahun.") as anggaran_kegiatan
			from master_daerah as d 
			where  
			d.id ilike ('".$daerah."' ||'%')

		GROUP BY d.id ORDER BY anggaran_kegiatan DESC
		";


		$data=query($this,$query,'con2');

		echo view('pages.anggaran.chart',[
			'data'=>$data,
			'title'=>$title,
			'rekap_program_kegiatan'=>$rekap_program_kegiatan,
			'rekap_program_kegiatan_pendukung'=>$rekap_program_kegiatan_pendukung,
			'id_dom'=>'perkota_1_',
			'link_laporan'=>true,
			'tahun'=>$tahun
		]);


	}


	public function perurusan($daerah){


		$tahun=TAHUN();

		$title="select CONCAT('PERURUSAN ',nama) as nama from master_daerah where id='".$daerah."'";

		$title=query($this,$title,'con2')[0]['nama'];


	
		$pie="select sum(anggaran) as jumlah_anggaran_kegiatan from kegiatan as p where kode_daerah is not null and p.tahun=".$tahun." and p.kode_daerah = '".$daerah."'";
		$rekap_program_kegiatan=query($this,$pie,'con2')[0];


		$pendukung="select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=".$tahun." and k.kode_daerah ='".$daerah."'";

		$rekap_program_kegiatan_pendukung=query($this,$pendukung,'con2')[0];




		$query="
		select 
			

			u.id,
			CONCAT('{kode_daerah:','".$daerah.",','id_urusan:',u.id,'}') as selected,
			CONCAT('".rt('/program-kegiatan/per-daerah/data/detail/')."','".$daerah."/',u.id) as link,
			CONCAT('".rt('/anggaran/data/persuburusan')."/','".$daerah."/',u.id) as next,

			min(u.nama) as nama,
		
			(select  case when sum(anggaran)>0 then sum(anggaran) else 0 end  from kegiatan  as k where k.id_urusan = (u.id) and k.tahun=".$tahun." and k.kode_daerah=('".$daerah."')) as anggaran_kegiatan
			from master_urusan as u
			

		GROUP BY u.id  ORDER BY anggaran_kegiatan DESC
		";


		$data=query($this,$query,'con2');

		echo view('pages.anggaran.chart',[
			'data'=>$data,
			'title'=>$title,
			'rekap_program_kegiatan'=>$rekap_program_kegiatan,
			'rekap_program_kegiatan_pendukung'=>$rekap_program_kegiatan_pendukung,
			'id_dom'=>'perurusan_2_',
			'tahun'=>$tahun
		]);



	}


	public function persuburusan($daerah,$urusan){


		$tahun=TAHUN();

		$title="select UPPER(CONCAT('PERSUBURUSAN ',nama)) as nama from master_urusan where id='".$urusan."'";

		$title=query($this,$title,'con2')[0]['nama'];


		$pie="select sum(anggaran) as jumlah_anggaran_kegiatan from kegiatan as p where p.tahun=".$tahun." and p.kode_daerah ='".$daerah."' 
		and p.id_urusan=".$urusan.""
		 ;
		$rekap_program_kegiatan=query($this,$pie,'con2')[0];


		$pendukung="select 
		SUM(CASE WHEN k.id_kp is not null THEN 1 ELSE 0 END ) as PN,
		SUM(CASE WHEN k.id_nspk is not null THEN 1 ELSE 0 END ) as NSPK,
		SUM(CASE WHEN k.id_sdgs is not null THEN 1 ELSE 0 END ) as SDGS,
		SUM(CASE WHEN k.id_spm is not null THEN 1 ELSE 0 END ) as SPM 
		from kegiatan as k where k.tahun=".$tahun." and k.kode_daerah ='".$daerah."' and k.id_urusan=".$urusan;

		$rekap_program_kegiatan_pendukung=query($this,$pendukung,'con2')[0];


		$query="
		select 
			su.id,
			CONCAT('{kode_daerah:','".$daerah.",','id_urusan:','".$urusan.",','id_sub_urusan:',su.id,'}') as selected,
			CONCAT('".rt('/program-kegiatan/per-daerah/data/detail/')."','".$daerah."/','".$urusan."/',su.id) as link,
			min(su.nama) as nama,
			
			(select  case when sum(anggaran)>0 then sum(anggaran) else 0 end  from kegiatan  as k where k.id_urusan = (".$urusan.") and k.id_sub_urusan=su.id and k.tahun=".$tahun." and k.kode_daerah=('".$daerah."')) as anggaran_kegiatan
			from master_sub_urusan as su
			
			where su.id_urusan = ".$urusan."

		GROUP BY su.id ORDER BY anggaran_kegiatan DESC
		";


		// echo $query;

		$data=query($this,$query,'con2');

		echo view('pages.anggaran.chart',[
			'data'=>$data,
			'title'=>$title,
			'rekap_program_kegiatan'=>$rekap_program_kegiatan,
			'rekap_program_kegiatan_pendukung'=>$rekap_program_kegiatan_pendukung,
			'id_dom'=>'persuburusan_3_',
			'tahun'=>$tahun
		]);


	}


	


	

}