<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('login');		
	}

	public function index()
	{
		$this->load->library('session');
		$this->load->view('login');
	}

	function cek_login()
	{
		// echo "<script>alert('ok')</script>";

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
            'username' => $username,
            'password' => $password            
        );		
		$cek = $this->login->cek_login($data);
		
		if ($cek) {            
			// if($this->session->userdata('nama') != $data['username']){
			// 	echo "<script>
			// 	alert('User anda telah masuk');
			// 	window.location.href='".base_url()."';
			// 	</script>";				
			// }else{
			$data_session = array(
			'nama' => $username,
			'status' => "login"
			); 			
			$this->session->set_userdata($data_session);
			redirect('Dashboard', 'refresh');            
								
        } else {            
            echo "<script>
			alert('User atau Password Salah');
			window.location.href='".base_url()."';
			</script>";
            
        }
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Welcome');		
	}	
}
