<?php
	class A_kebudayaan_input_m extends CI_Model{
		
		function input_kebudayaan($data,$table){
			$this->db->insert($table,$data);
		}
	}
?>