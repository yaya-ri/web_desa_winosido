<?php
	class A_wisata_table_m extends CI_Model{
		
		function read_wisata(){
			$query = $this->db->query("SELECT * FROM wisata");
			return $query;
		}


		function delete_wisata($id,$table){
			$this->db->where($id);
			$this->db->delete($table);
		}

		function update_wisata($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>