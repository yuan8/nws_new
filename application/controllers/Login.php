<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}
 
	function index(){
		return view('auth.login');
	}
 
	function aksi_login(){
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $username,
			'password' => md5($password)
			);

 			// dd($where);

		$cek = $this->m_login->cek_login("users",$where)->row();
		if($cek){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'id'=>(int)$cek->id,
				'username'=>$cek->username,
				'role'=>(int)$cek->role,
				'name'=>$cek->name,
				'email'=>$cek->email,
				'time_login'=>date('Y-m-d h:i'),

				);

 
			$this->session->set_userdata($data_session);
			$data=['type'=>'success','message'=>'Selamat Datang di NUWSP'];
			$this->session->set_flashdata('message_system',$data);

			// dd($this->session->all_userdata());
 			
			redirect(base_url("dashboard"));
 
		}else{
			$data=['type'=>'error','message'=>'Password Atau Email yang Anda Masukan Salah'];
			$this->session->set_flashdata('message_system',$data);
			withInput();

			redirect(rt('login'));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}