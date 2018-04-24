<?php
	class A_produk_picture_m extends CI_Model{
		function update_produk($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>