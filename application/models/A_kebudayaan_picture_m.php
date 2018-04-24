<?php
	class A_kebudayaan_picture_m extends CI_Model{
		function update_kebudayaan($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>