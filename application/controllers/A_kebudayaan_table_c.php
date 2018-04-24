<?php 
	/**
	* 
	*/
	class A_kebudayaan_table_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_kebudayaan_table_m');
			$this->load->helper('url');
		}

		Public function index(){
			$data['kebudayaan'] = $this->a_kebudayaan_table_m->read_kebudayaan()->result(); 
			$this->template->load('admin/navbar','admin/kebudayaan_table_v',$data);
		}

		public function delete_kebudayaan(){
			$id = $this->input->post('id');
			$id_a = array(
				'kebudayaan_id' => $id
				);
			$this->a_kebudayaan_table_m->delete_kebudayaan($id_a,'kebudayaan');
			redirect(base_url("index.php/a_kebudayaan_table_c"));
		}

		function update(){

			$id 			= $this->input->post('id');
			echo $id;
			exit();
			$nama 			= $this->input->post('nama');
			$jenis 			= $this->input->post('jenis');				
			$pelaksanaan 	= $this->input->post('pelaksanaan');
			$deskripsi 		= $this->input->post('deskripsi');

			$data= array(
				'kebudayaan_name' => $nama,
				'kebudayaan_type' => $jenis,
				'kebudayaan_date' => $pelaksanaan,
				'kebudayaan_desc' => $deskripsi
				);

				$where = array(
						'kebudayaan_id' => $id
						);

			$this->a_kebudayaan_table_m->update_kebudayaan($where, $data,'kebudayaan');
			

		}

	}
 ?>