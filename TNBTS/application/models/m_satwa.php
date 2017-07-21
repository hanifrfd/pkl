<?php 

	
	class M_Satwa extends CI_Model{	
		
		function data_all(){		
			$this->load->database();
			return $this->db->query("SELECT * FROM `satwa`");        	
		}	

		function input_all($satwa=""){		
			$this->load->database();						
			$query = $this->db->query("INSERT INTO `satwa` (`id`, `Famili`, `Namailmiah`, `Namalokal`, `Deskripsi`, `Lokal`, `Migran`, `IUCN`, `Peraturan`, `Koordinat`, `Dokumentasi`, `Ket`) VALUES (NULL, '".$satwa['famili']."', '".$satwa['nilmiah']."', '".$satwa['nlokal']."', '".$satwa['deskripsi']."', '".$satwa['lokal']."', '".$satwa['migran']."', '".$satwa['IUCN']."', '".$satwa['peraturan']."', '".$satwa['koordinat']."', '".$satwa['dokumentasi']."', '".$satwa['keterangan']."');");
        	if ($query) {
	            return true;
        	}else{
	            return false;
        	}			
		}
		function input_gambar($gambar=""){		
			$this->load->database();						
			$query = $this->db->query("INSERT INTO `percobaan` (`id`, `gambar`,`tipe`) VALUES (NULL,'".$gambar['Data']."','".$gambar['img']."');");
        	if ($query) {
	            return true;
        	}else{
	            return false;
        	}			
		}

	}

?>