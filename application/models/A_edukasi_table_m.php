<?php
	class A_edukasi_table_m extends CI_Model{
		
		function read_edukasi(){
			$query = $this->db->query("SELECT * FROM edukasi");
			return $query;
		}


		function delete_edukasi($id,$table){
			$this->db->where($id);
			$this->db->delete($table);
		}

		function update_edukasi($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		
	}
?>