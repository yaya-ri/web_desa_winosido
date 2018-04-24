<?php
	class A_produk_table_m extends CI_Model{
		
		function read_produk(){
			$query = $this->db->query("SELECT * FROM produk");
			return $query;
		}


		function delete_produk($id,$table){
			$this->db->where($id);
			$this->db->delete($table);
		}

		function update_produk($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
	}
?>