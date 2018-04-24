<?php
	class A_edukasi_input_m extends CI_Model{
		
		function input_edukasi($data,$table){
			$this->db->insert($table,$data);
		}
	}
?>