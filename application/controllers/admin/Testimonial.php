<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
			redirect('auth');
        }    
    }

	public function index(){
        $this->db->from('testimonial');
        $testimonial = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman testimonial',
            'testimonial'      => $testimonial
        );

		$this->template->load('template_admin','admin/testimonial',$data);
	}
    public function simpan(){
        $namafoto = date('YmdMis').'.jpg';
        $config['upload_path']       = 'assets/upload/testimonial';
        $config['max_size'] = 500 * 1024;
        $config['file_name']         = $namafoto;
        $config['allowed_types']     = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Ukuran waktu terlalu besar.
                            </div>');
            redirect('admin/testimonial');
        } elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data  = array('upload_data' => $this->upload->data());
        }
        $this->db->from('testimonial');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Berhasil menambahkan galeri baru.
                            </div>');
            redirect('admin/testimonial');
            
        }
        $data = array(
            'judul'          => $this->input->post('judul'),
            'foto'           => $namafoto,
        );
        $this->db->insert('testimonial',$data);    
        $this->session->set_flashdata('alert','
        <div class="alert alert-success mb-1" role="alert">
        Berhasil menambahkan Caraousel
        </div>
        ');
        redirect('admin/testimonial');
    }
    public function delete_data($id){
        $filename = FCPATH . '/assets/upload/testimonial/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/testimonial/".$id);
            }
        $where = array('foto' => $id);
        $this->db->delete('testimonial', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
        data berhasil di hapus</div>');
        redirect('admin/testimonial');
    }
}
