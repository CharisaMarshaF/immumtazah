<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
			redirect('auth');
        }    
    }

	public function index(){
        $this->db->from('caraousel');
        $testi = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Testimonial',
            'testi'      => $testi
        );

		$this->template->load('template_admin','admin/testi_index',$data);
	}
    public function simpan(){
        $namafoto = date('YmdMis').'.jpg';
        $config['upload_path']       = 'assets/upload/testi';
        $config['max_size'] = 500 * 1024;
        $config['file_name']         = $namafoto;
        $config['allowed_types']     = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Ukuran foto terlalu besar.
                            </div>');
            redirect('admin/testi');
        } elseif(!$this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data  = array('upload_data' => $this->upload->data());
        }
        $this->db->from('testi');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Caraousel sudah ada.
                            </div>');
            redirect('admin/testi');
            
        }
        $data = array(
            'judul'          => $this->input->post('judul'),
            'foto'           => $namafoto,
        );
        $this->db->insert('testi',$data);    
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Berhasil menambahkan caraousel.
                            </div>');
        redirect('admin/testi');
    }
    public function delete_data($id) {
        $filename = FCPATH . '/assets/upload/testi/' . $id;
        if (file_exists($filename)) {
            unlink("./assets/upload/testi/" . $id);
        }
        $this->db->delete('testi', array('foto' => $id));
        
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Caraousel berhasil dihapus
        </div>');
        
        redirect('admin/testi');
    }
    
}
