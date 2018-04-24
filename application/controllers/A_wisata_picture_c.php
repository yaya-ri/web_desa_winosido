<?php 
	/**
	* 
	*/
	class A_wisata_picture_c extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('a_wisata_picture_m');
			$this->load->helper(array('form', 'url'));
		}

		Public function index(){
			$this->template->load('admin/navbar','admin/wisata_picture_v');
		}

		public function do_upload(){
        //$image_path = realpath(APPPATH . './assets/gambar');

        $config['upload_path']          = './assets/gambar';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 0;

        $this->load->library('upload');
        $this->upload->initialize($config);
        $id = $this->input->post('id');
        $gambar = $this->input->post('gambar');
        // echo $gambar;
        // exit();

        if ( ! $this->upload->do_upload('userfile')){
	        $error = array('error' => $this->upload->display_errors());
	        $this->template->load('admin/navbar','admin/wisata_picture_v',$error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            $fileinfo = $this->upload->data();

            if($gambar=="Foto 1"){
            	$data = array(
            	        'wisata_p197_1' => $fileinfo['file_name']
            	    );
            	$where = array('wisata_id' => $id);
            	$this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 2"){
            	$data = array(
            	        'wisata_p197_2' => $fileinfo['file_name']
            	    );
            	$where = array('wisata_id' => $id);
            	$this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 3"){
            	$data = array(
            	        'wisata_p197_3' => $fileinfo['file_name']
            	    );
            	$where = array('wisata_id' => $id);
            	$this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 4"){
            	$data = array(
            	        'wisata_p197_4' => $fileinfo['file_name']
            	    );
            	$where = array('wisata_id' => $id);
            	$this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 5"){
                $data = array(
                        'wisata_p388_1' => $fileinfo['file_name']
                    );
                $where = array('wisata_id' => $id);
                $this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 6"){
                $data = array(
                        'wisata_p388_2' => $fileinfo['file_name']
                    );
                $where = array('wisata_id' => $id);
                $this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 7"){
                $data = array(
                        'wisata_p388_3' => $fileinfo['file_name']
                    );
                $where = array('wisata_id' => $id);
                $this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 8"){
                $data = array(
                        'wisata_p388_4' => $fileinfo['file_name']
                    );
                $where = array('wisata_id' => $id);
                $this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }else if($gambar=="Foto 9"){
                $data = array(
                        'wisata_p388_b' => $fileinfo['file_name']
                    );
                $where = array('wisata_id' => $id);
                $this->a_wisata_picture_m->update_wisata($where,$data,"wisata");
            }
            
            // $this->template->load('static_v','s_final_report_v',$data);
            // $this->read();
            redirect(base_url('index.php/a_wisata_table_c/'));
        }
    }

	}
 ?>