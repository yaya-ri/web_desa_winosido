<?php 
	/**
	* 
	*/
	class Kebudayaan_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			//$this->load->model('m_detail_activity_m');
			$this->load->helper('url');
		}

		Public function index(){
			$this->load->view('web/kebudayaan_v');
		}

	}
 ?>