<?php
	class A_produk_input_m extends CI_Model{
		
		function input_produk($data,$table){
			$this->db->insert($table,$data);
		}
	}
?>