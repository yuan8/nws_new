<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rpjmd extends CI_Controller {


	public function index(){
		if($_SESSION['role']==3){
		$query="select string_agg(CONCAT(kode_daerah),',') as kode_daerah from user_perwakilan_nuwas where user_id =".$_SESSION['id'];
		$data_daerah=query($this,$query)[0];

		$data_daerah['kode_daerah']=explode(',', $data_daerah['kode_daerah']);
		array_walk($data_daerah['kode_daerah'],function(&$value,$key){
			$value= ("'".$value."'");
		});



		$query="select * from master_daerah where id in (".(isset($data_daerah['kode_daerah'])?implode(',',$data_daerah['kode_daerah']):"'0'").")";
		$data_daerah=query($this,$query);


		$query='select *,(select nama from master_daerah where id=kode_daerah) as nama_daerah from file_rpjmd where user_id='.$_SESSION['id'];
		$data_rpjmd=query($this,$query);


		return view('admin.file.rpjmd',['daerahs'=>$data_daerah,'files'=>$data_rpjmd]);

		}else{
			redirect('/');
		}
		// dd($this->session->userdata('role'));
	}


	public function store(){

		$request=request();

		$file=StoragePut('/public/files/rpjmd/'.date('Y-m').'/',$request['file']);
		$extension=strtolower(pathinfo($request['file']['name'],PATHINFO_EXTENSION));
		if($file){
			$data=$this->db->insert('file_rpjmd',
				 [
					'path'=>$file,
					'tahun'=>$request['tahun'],
					'tahun_selesai'=>$request['tahun_selesai'],
					'kode_daerah'=>'11',
					'user_id'=>$_SESSION['id'],
					'extension'=>$extension,
					'created_at'=>date('Y-m-d h:i.u'),
					'updated_at'=>date('Y-m-d h:i.u')
				]
			);

			redirect('dash/file/rpjmd');

		}else{

		}
		
	}
}