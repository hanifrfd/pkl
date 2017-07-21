<?php 

	
	class Login extends CI_Model{	
		
		function cek_login($login=""){		
			$this->load->database();
			$query = $this->db->query("SELECT * FROM `user` WHERE Username='".$login['username']."' and Password='".$login['password']."' ");
        	if ($query->num_rows() > 0) {
	            return true;
        	}else{
	            return false;
        	}
		}	

	}

?>