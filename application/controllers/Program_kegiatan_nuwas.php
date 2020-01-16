<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_kegiatan_nuwas extends CI_Controller {
	 function __construct()
	    {
	        parent::__construct();
	        auth();
	    }

	public function index(){
		return view('pages.program_kegiatan_nuwas');
	}

}