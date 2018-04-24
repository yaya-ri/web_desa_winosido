<?php 
	/**
	* 
	*/
	class A_edukasi_table_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_edukasi_table_m');
			$this->load->helper('url');
		}

		Public function index(){
			$data['edukasi'] = $this->a_edukasi_table_m->read_edukasi()->result(); 
			$this->template->load('admin/navbar','admin/edukasi_table_v',$data);
		}

		public function delete_edukasi(){
			$id = $this->input->post('id');
			$id_a = array(
				'edukasi_id' => $id
				);
			$this->a_edukasi_table_m->delete_edukasi($id_a,'edukasi');
			redirect(base_url("index.php/a_edukasi_table_c"));
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
				'edukasi_name' => $nama,
				'edukasi_type' => $jenis,
				'edukasi_date' => $pelaksanaan,
				'edukasi_desc' => $deskripsi
				);

				$where = array(
						'edukasi_id' => $id
						);

			$this->a_edukasi_table_m->update_edukasi($where, $data,'edukasi');
			

		}

	}
 ?>