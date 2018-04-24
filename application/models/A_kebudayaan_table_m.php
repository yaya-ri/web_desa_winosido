<?php
	class A_kebudayaan_table_m extends CI_Model{
		
		function read_kebudayaan(){
			$query = $this->db->query("SELECT * FROM kebudayaan");
			return $query;
		}


		function delete_kebudayaan($id,$table){
			$this->db->where($id);
			$this->db->delete($table);
		}

		function update_kebudayaan($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		
	}
?>