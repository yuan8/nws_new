<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catatan extends CI_Controller {

	function store(){

		$catatan=request('catatan');
		$rekomendasi=request('rekomendasi');
		$rekomendasi=request('judul');

		dd($_POST);

		withInput();
		redirect(rt('admin'));

	}

}