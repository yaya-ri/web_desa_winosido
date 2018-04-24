<?php 
	/**
	* 
	*/
	class A_wisata_table_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_wisata_table_m');
			$this->load->helper('url');
		}

		Public function index(){
			$data['wisata'] = $this->a_wisata_table_m->read_wisata()->result(); 
			$this->template->load('admin/navbar','admin/wisata_table_v',$data);
		}

		public function delete_wisata(){
			$id = $this->input->post('id');
			$id_a = array(
				'wisata_id' => $id
				);
			$this->a_wisata_table_m->delete_wisata($id_a,'wisata');
			redirect(base_url("index.php/a_wisata_table_c"));
		}

		function update(){

			$id 			= $this->input->post('id');
			$nama 			= $this->input->post('nama');
			$lokasi 		= $this->input->post('lokasi');				
			$deskripsi 		= $this->input->post('deskripsi');

			$data= array(
				'wisata_name' => $nama,
				'wisata_loc'  => $lokasi,
				'wisata_desc' => $deskripsi
				);

				$where = array(
						'wisata_id' => $id
						);

			$this->a_wisata_table_m->update_wisata($where, $data,'wisata');
			

		}

	}
 ?>