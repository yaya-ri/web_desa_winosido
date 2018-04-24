<?php
	class A_edukasi_picture_m extends CI_Model{
		function update_edukasi($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>