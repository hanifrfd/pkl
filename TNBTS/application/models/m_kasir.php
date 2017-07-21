<?php 

	
	class M_kasir extends CI_Model{	
		
		function data_menu(){		
			$this->load->database();
			return $this->db->query("SELECT * FROM `produk`");        	
		}	

		function harga($menu="",$count){		
			$this->load->database();			
			$harga=array();
			for($i=0; $i <= $count; $i++){				
				$data = $this->db->query("SELECT Harga FROM `produk` where Nama='".$menu["pesanan".$i]."'  ");				
				foreach ($data->result() as $row){				
				$harga["harga".$i] = $row->Harga;
				}
			}			
			return $harga;			
		}

	}

?>