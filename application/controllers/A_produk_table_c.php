<?php 
	/**
	* 
	*/
	class A_produk_table_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_produk_table_m');
			$this->load->helper('url');
		}

		Public function index(){
			$data['produk'] = $this->a_produk_table_m->read_produk()->result(); 
			$this->template->load('admin/navbar','admin/produk_table_v',$data);
		}

		public function delete_produk(){
			$id = $this->input->post('id');
			$id_a = array(
				'produk_id' => $id
				);
			$this->a_produk_table_m->delete_produk($id_a,'produk');
			redirect(base_url("index.php/a_produk_table_c"));
		}

		function update(){

			$id 			= $this->input->post('id');
			$nama 			= $this->input->post('nama');
			$bahan      	= $this->input->post('bahan-dasar');				
			$harga		 	= $this->input->post('harga');
			$deskripsi 		= $this->input->post('deskripsi');
			$kontak 		= $this->input->post('kontak');


			$data= array(
				'produk_name' 		=> $nama,
				'produk_material'	=> $bahan,
				'produk_price' 		=> $harga,
				'produk_desc' 		=> $deskripsi,
				'produk_contact'	=> $kontak
				);

			$where = array(
				'produk_id' => $id
				);

			$this->a_produk_table_m->update_produk($where, $data,'produk');
			

		}

	}
 ?>