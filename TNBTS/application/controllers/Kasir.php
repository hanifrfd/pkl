<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

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
	public function index()
	{			
		$this->load->view('kasir');
	}	

	function nota(){
		$this->load->view('nota');	
	}

	function datamenu(){
		$this->load->model('m_kasir');		
		$data = $this->m_kasir->data_menu();				
		
		echo "<option>Silahkan memilih</option>";		
		foreach($data->result_array() as $row){
		    echo "<option value=\"".$row['Nama']."\">" . $row['Nama'] . "</option>";
		}	
	}

	function ordersave(){
		$this->load->model('m_kasir');

		
		$count = $this->input->post('count');

		$data= array();
		for($i=0; $i <= $count; $i++){
			$data["pesanan".$i] = $this->input->post('pesanan'.$i);
			$data["jumlah".$i] = $this->input->post('jumlah'.$i);
		}
		
		$harga= $this->m_kasir->harga($data,$count);
		$total = array();
		
		for($i=1; $i <= $count; $i++){
			foreach ($harga as $menu) {		   	 	
			   $total["tharga".$i] = $menu*$data["jumlah".$i];		   
			}
			echo $data["pesanan".$i]." - Qty=".$data["jumlah".$i]." : ".$total["tharga".$i]."<br>";			
		}
		
			
	}
}
