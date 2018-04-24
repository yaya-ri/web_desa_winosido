<?php
	class A_wisata_input_m extends CI_Model{
		
		function input_wisata($data,$table){
			$this->db->insert($table,$data);
		}
	}
?>