<?php 
	/**
	* 
	*/
	class A_produk_input_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_produk_input_m');
			$this->load->helper('url');
		}

		Public function index(){
			$this->template->load('admin/navbar','admin/produk_input_v');
		}

		function input_produk(){
			$id 			= $this->input->post('id');
			$nama 			= $this->input->post('nama');
			$bahan      	= $this->input->post('bahan');				
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

			$this->a_produk_input_m->input_produk($data,'produk');
		}

	}
 ?>