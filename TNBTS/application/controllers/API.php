<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class API extends REST_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper("url");
        $this->load->database();
        $this->load->model('m_penjualan');
        date_default_timezone_set('Asia/Jakarta');
    }
     function index_get() {
        $this->response("Ok :)", 200);
    }

	function getdata()
	{			
		$this->load->model('m_penjualan');
		
		$data= $this->m_penjualan->getPenjualan();		
		$this->load->view('dashboard',$data);
	}	

	
}
