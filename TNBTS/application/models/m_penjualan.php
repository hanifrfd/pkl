<?php 

	
	class M_penjualan extends CI_Model{	
		
		function data_menu(){		
			$this->load->database();
			return $this->db->query("SELECT * FROM `produk`");        	
		}	

		function getPenjualan(){		
			$this->load->database();									
			$data =  $this->db->query("SELECT Total_harga FROM `penjualan`");	
			return $data;		
			
		}

	}

?>