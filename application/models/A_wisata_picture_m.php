<?php
	class A_wisata_picture_m extends CI_Model{
		function update_wisata($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>