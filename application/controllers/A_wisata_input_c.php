<?php 
	/**
	* 
	*/
	class A_wisata_input_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_wisata_input_m');
			$this->load->helper('url');
		}

		Public function index(){
			$this->template->load('admin/navbar','admin/wisata_input_v');
		}

		function input_wisata(){
			$nama 			= $this->input->post('nama');
			$lokasi			= $this->input->post('lokasi');
			$deskripsi		= $this->input->post('deskripsi');

			$data = array(
				'wisata_name' => $nama,
				'wisata_loc' => $$lokasi,
				'wisata_desc' => $deskripsi
				);

			$this->a_wisata_input_m->input_wisata($data,'wisata');
		}

	}
 ?>