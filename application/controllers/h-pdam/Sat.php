<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sat extends CI_Controller {

	 function data($id=null){
		if($id!=null){
			$select="select sat_d.*,
			p.nama as pertanyaan,
			p.id_kategori,
			(select c.nama from master_kategori_pertanyaan_sat as c where c.id = p.id_kategori)
			 as kategori
			 from sat_detail as sat_d
			 left join master_pertanyaan_sat as p on kode = sat_d.id_q
			  where sat_d.id_sat=".$id." order by p.id_kategori";

			$data=query($this,$select);

			
			return view('pages.pdam.detail_sat',['data'=>$data]);
			
		}

	}
}