<?php 
	/**
	* 
	*/
	class A_kebudayaan_input_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_kebudayaan_input_m');
			$this->load->helper('url');
		}

		Public function index(){
			$this->template->load('admin/navbar','admin/kebudayaan_input_v');
		}

		function input_kebudayaan(){
			$nama 			= $this->input->post('nama');
			$pelaksanaan	= $this->input->post('pelaksanaan');
			$jenis			= $this->input->post('jenis');
			$gambar			= $this->input->post('gambar');
			$deskripsi		= $this->input->post('deskripsi');

			$data = array(
				'kebudayaan_name' => $nama,
				'kebudayaan_type' => $jenis,
				'kebudayaan_desc' => $deskripsi,
				'kebudayaan_date' => $pelaksanaan
				);

			$this->a_kebudayaan_input_m->input_kebudayaan($data,'kebudayaan');
		}

	}
 ?>