<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index($page=0){
		
		$url="$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

		$page_limit=10;
		$ofset=0;
		$where=[];
		$where_filter='';
		$where_trafik='';
		$where_globe='';



		if(!empty(request('trafik'))||!empty(request('filter'))||!empty(request('q'))){
			if(!empty(request('q'))){
				$where[0]="nama_pdam ilike '%".request('q')."%'"; 
			}
			if(!empty(request('filter'))){
				$where[1]=" penilaian_nuwas in ('".implode("','",request('filter'))."')";
			}
			if(!empty(request('trafik'))){
				$where[2]=" traffic_penilaian_nuwas in  ('".implode("','",request('trafik'))."')";
			}

			foreach ($where as $key => $value) {
				if($where_globe!=''){
					$where_globe.='and ('.$where[$key].')';
				}else{
					$where_globe.='where ('.$where[$key].')';
				}
			}

			$select="select count(*) as jml from pdam_profile ".$where_globe." limit 1";
			$data=query($this,$select)[0];
			$max=$data['jml'];


			$select2="select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah,
			(select d.nama from master_daerah as d where d.id=left(p.kode_daerah,2) limit 1) as nama_provinsi from pdam_profile as p  ".$where_globe." order by p.updated_at DESC limit ".$page_limit." OFFSET  ".($page>0?$page:0);



		}else{
			$select="select count(*) as jml from pdam_profile limit 1";
			$data=query($this,$select)[0];
			$max=$data['jml'];


			$select2="select p.*,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah,
			(select d.nama from master_daerah as d where d.id=left(p.kode_daerah,2) limit 1) as nama_provinsi from pdam_profile as p order by p.updated_at DESC limit ".$page_limit." OFFSET  ".($page>0?$page:0);

			
		}

		
	
		$data=query($this,$select2);

		$this->load->library('pagination');

		$config['base_url'] =rt('h-pdam/data/index');
		$config['total_rows'] = $max;
		$config['per_page'] = $page_limit;

		$this->pagination->initialize($config);

		withInput();
		return view('pages.pdam.index',['datas'=>$data,'pagination'=>$this->pagination->create_links()]);
	}


	public function detail($kode_daerah){



		$sats=[];
		$data_detail="select *,(select d.nama from master_daerah as d where d.id=p.kode_daerah limit 1) as nama_daerah,
		(select d.nama from master_daerah as d where d.id=left(p.kode_daerah,2) limit 1) as nama_provinsi from pdam_profile as p where p.kode_daerah='".$kode_daerah."' limit 1";
		$data_detail=query($this,$data_detail);
		if(isset($data_detail[0])){
			$data_detail=$data_detail[0];
		}

		$sats="select s.*,(select nilai from sat_detail where id_sat=s.id and id_q='1.1')::numeric as nilai_kinerja_total,(select nilai from sat_detail where id_sat=s.id and id_q='1.2')::numeric as nilai_keuangan,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.4')::numeric as nilai_operasioanal,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.3')::numeric as nilai_pelayanan,
		(select nilai from sat_detail where id_sat=s.id and id_q='1.5')::numeric as nilai_sdm


		 from sat as s where s.kode_daerah='".$kode_daerah."'::text order by CONCAT(s.period_tahun ,s.period_bulan)::numeric DESC,s.tanggal_masukan desc";
		$sats=query($this,$sats);

		return view('pages.pdam.detail',['data_detail'=>$data_detail,'sats'=>$sats]);
	}

}