<?php 
	/**
	* 
	*/
	class A_edukasi_input_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_edukasi_input_m');
			$this->load->helper('url');
		}

		Public function index(){
			$this->template->load('admin/navbar','admin/edukasi_input_v');
		}

		function input_edukasi(){
			$judul 			= $this->input->post('judul');
			$jenis			= $this->input->post('jenis');
			$deskripsi		= $this->input->post('deskripsi');

			$data = array(
				'edukasi_title' => $judul,
				'edukasi_type' => $jenis,
				'edukasi_desc' => $deskripsi
				);

			$this->a_edukasi_input_m->input_edukasi($data,'edukasi');
		}

	}
 ?>