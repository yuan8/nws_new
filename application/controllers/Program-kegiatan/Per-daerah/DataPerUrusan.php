<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DataPerUrusan extends CI_Controller {

	public function Detail($id_urusan=null,$id_sub_urusan=null){

		$urusan=null;

		$urusan="select * from master_urusan where id=".$id_urusan."";
		$urusan=query($this,$urusan,'con2')[0];
			$urusan=$urusan['nama'];


		$suburusan=null;
	
		if($id_sub_urusan!=null){
			$suburusan="select * from master_sub_urusan where id=".$id_sub_urusan."";
			$suburusan=query($this,$suburusan,'con2')[0];
			$suburusan=$suburusan['nama'];

		}

		$nama="".(isset($urusan)?', '.$urusan:'').(isset($suburusan)?', '.$suburusan:'');


		$tahun=TAHUN();
		$request=$_GET;

		if(count($request)>0){

		}else{


		}

		$link=rt('program-kegiatan/per-daerah/dataperurusan/kegiatan/'.(isset($id_urusan)?$id_urusan.'/':'').(isset($id_sub_urusan)?$id_sub_urusan.'/':''));

		$query="
		select *,
		
		(select 
			CONCAT(d.nama)
			from master_daerah as d where d.id=p.kode_daerah) as daerah,
		(select 
			CONCAT(u.nama)
			from master_urusan as u where u.id=p.id_urusan) as urusan,
		(select 
			CONCAT(su.nama)
			from master_sub_urusan as su where su.id=p.id_sub_urusan) as suburusan,
		(select 
			sum(k.anggaran)
			from kegiatan as k where k.id_program=p.id) as total_anggaran,

		(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
            
            from  indikator_program as i
            where i.id_program= p.id
          ) as indikator,

          concat('".$link."','?id_program=',p.id) as link


		from program as p

		where p.tahun=".$tahun.
			(isset($id_urusan)?" and p.id_urusan=".$id_urusan."":'').
			(isset($id_sub_urusan)?" and p.id_sub_urusan=".$id_sub_urusan."":'').

		" ORDER BY p.kode_daerah,p.id_urusan,p.id_sub_urusan"	

		;


		$data=query($this,$query,'con2');


		return view('helper.table_daerah',['data'=>$data,'nama'=>$nama]);

	}

		public function  Kegiatan($id_urusan=null,$id_sub_urusan=null){
			$tahun=TAHUN();

			$provinsi="";

			$urusan=null;
			$suburusan=null;
			if($id_urusan!=null){
				$urusan="select * from master_urusan where id=".$id_urusan."";
				$urusan=query($this,$urusan,'con2')[0];
				$urusan=$urusan['nama'];
			}

			if($id_sub_urusan!=null){
				$suburusan="select * from master_sub_urusan where id=".$id_sub_urusan."";
				$suburusan=query($this,$suburusan,'con2')[0];
				$suburusan=$suburusan['nama'];

			}

			$nama=(isset($urusan)?', '.$urusan:'').(isset($suburusan)?', '.$suburusan:'');




			$program='select * from program where id ='.$_GET['id_program'];
			$program=query($this,$program,'con2')[0];



			$query="
			select *,
			
			(select 
				CONCAT(d.nama)
				from master_daerah as d where d.id=k.kode_daerah) as daerah,
			(select 
				CONCAT(u.nama)
				from master_urusan as u where u.id=k.id_urusan) as urusan,
			(select 
				CONCAT(su.nama)
				from master_sub_urusan as su where su.id=k.id_sub_urusan) as suburusan,

			(select string_agg(CONCAT(id,'||',indikator,'||',target_awal,'||',target_ahir,'||',satuan,'||',anggaran),'|++|') 
	            
	            from  indikator_kegiatan as i
	            where i.id_kegiatan= k.id
	          ) as indikator



			from kegiatan as k

			where k.tahun=".$tahun." and id_program=".$_GET['id_program'].
				(isset($id_urusan)?" and k.id_urusan=".$id_urusan."":'').
				(isset($id_sub_urusan)?" and k.id_sub_urusan=".$id_sub_urusan."":'').

			" ORDER BY k.kode_daerah,k.id_urusan,k.id_sub_urusan"	

			;


		$data=query($this,$query,'con2');

		return view('helper.table_daerah_kegiatan',['data'=>$data,'program'=>$program,'nama'=>$nama]);
	}


}