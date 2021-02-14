<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
	parent::__construct();
	$this->load->model('mdl_login');
	}
	public function index()
	{
		$is_user = $this->session->userdata('status_login');
		$this->load->model('mdl_login');
		$data['title'] = "Login Admin Palu Nomoni";
		
		$submit = $this->input->post('submit',TRUE);
		if ($submit=="submit") {
			//proses login
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$admin = $this->mdl_login->login_adm($email,$password);
			if ($admin) { //check array
				foreach ($admin as $row) {
				$level = $row->level;
 				$id = $row->id;
 				$nama = $row->nama;
 				$email = $row->email;
 				$password = $row->password;
 				$hp = $row->hp;
 				$hp2 = $row->hp2;
 				$alamat = $row->alamat;
 				$gender = $row->gender;
				
			}
				
			}

			if (isset($level)) {
				$hasil = $level;
			}else{
				$hasil = 0;
			}
			
			if ($hasil==1) {
				$this->session->set_userdata(array('status_login' => $admin));
				redirect('/admin');
			}elseif ($hasil==2) {
				$this->session->set_userdata(array('status_login' => $admin));
				redirect('/admin');
			}else{
				$data['salah'] = "email atau password tidak ada";
				
			}
			
		}

		 $this->load->view('admin/v_login', $data);
		// $this->load->view('login_adm');
		 
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */