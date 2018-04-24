<?php 
	/**
	* 
	*/
	class A_edukasi_picture_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_edukasi_picture_m');
			$this->load->helper(array('form', 'url'));
		}

		Public function index(){
			$this->template->load('admin/navbar','admin/edukasi_picture_v');
		}

		public function do_upload(){
        //$image_path = realpath(APPPATH . './assets/gambar');

        $config['upload_path']          = './assets/gambar';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 0;

        $this->load->library('upload');
        $this->upload->initialize($config);
        $id = $this->input->post('id');

        if ( ! $this->upload->do_upload('userfile')){
	        $error = array('error' => $this->upload->display_errors());
	        $this->template->load('admin/navbar','admin/edukasi_picture_v',$error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $fileinfo = $this->upload->data();

            	$data = array(
            	        'edukasi_pic' => $fileinfo['file_name']
            	    );
            	$where = array('edukasi_id' => $id);
            	$this->a_edukasi_picture_m->update_edukasi($where,$data,"edukasi");
                        
            // $this->template->load('static_v','s_final_report_v',$data);
            // $this->read();
            redirect(base_url('index.php/a_edukasi_table_c/'));
        }
    }

	}
 ?>