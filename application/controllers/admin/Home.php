<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Team_model');
        if($this->session->userdata('level')==NULL){
			redirect('auth');
        }    
    }

	public function index(){
        $this->db->from('team');
        $team = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Team',
            'team'        => $team
        );

		$this->template->load('template_admin','admin/team',$data);
	}
    public function simpan(){
        $namafoto = date('YmdMis').'.jpg';
        $config['upload_path']       = 'assets/upload/team';
        $config['max_size'] = 500 * 1024;
        $config['file_name']         = $namafoto;
        $config['allowed_types']     = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert','
            <div class="alert alert-danger alert-dismissible text-white" role="alert">Ukuran foto terlalu besar</div>
            ');
            redirect('admin/team');
        } elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data  = array('upload_data' => $this->upload->data());
        }
        $this->db->from('team');
        $this->db->where('nama',$this->input->post('nama'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-success alert-dismissible text-white" role="alert">nama team sudah ada</div>
            ');
            redirect('admin/team');
            
        }
        $data = array(
            'nama'          => $this->input->post('nama'),
            'info'     => $this->input->post('info'),
            'foto'           => $namafoto,
        );
        $this->db->insert('team',$data);       
        $this->session->set_flashdata('alert','
        <div class="alert alert-success mb-1" role="alert">
        Berhasil menambahkan team
        </div>
        ');
        redirect('admin/team');
    }
    public function delete_data($id){
        $filename = FCPATH . '/assets/upload/team/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/team/".$id);
            }
        $where = array('foto' => $id);
        $this->db->delete('team', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di hapus</div>');
        redirect('admin/team');
    }
    
    
    public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/team/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['overwrite']            = true;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/team');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
       

       $this->Team_model->update($namafoto);
       $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
       data berhasil di simpan</div>');
       redirect('admin/team');
	}
}
    

