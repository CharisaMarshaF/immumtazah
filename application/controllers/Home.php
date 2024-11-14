<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Konten_model');
    }
    public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('team');
        $team = $this->db->get()->result_array();
		$this->db->from('testimonial');
        $testimonial = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $recentpost = $this->Konten_model->recentpost();
        $recentfooter = $this->Konten_model->recentfooter();   
        $search = $this->input->get('search');
        if(isset($search)){
            $konten = $this->Konten_model->search($search);
        } else {
            $this->db->from('konten a');
            $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
            $this->db->join('user c','a.username=c.username','left');
            $this->db->order_by('tanggal','DESC');
            $konten = $this->db->get()->result_array();
        }
        $data = array(
            'judul'   => "Beranda | CharisaAlele",
            'konfig'  => $konfig,
            'kategori' => $kategori,
            'galeri' => $galeri,
			'testimonial' => $testimonial,
            'team'    => $team,

            'caraousel' => $caraousel,
            'konten'    => $konten,
            'recentpost' => $recentpost,
            'recentfooter' => $recentfooter,

        );
        
		$this->load->view('beranda',$data);
    }
	public function about(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('team');
        $team = $this->db->get()->result_array();
		$this->db->from('testimonial');
        $testimonial = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('konten a');
        $konten = $this->db->get()->result_array();
        
        $data = array(
            'judul'   => "Beranda | CharisaAlele",
            'konfig'  => $konfig,
            'kategori' => $kategori,
            'galeri' => $galeri,
			'testimonial' => $testimonial,
            'caraousel' => $caraousel,            
            'team' => $team,
            'konten'    => $konten,

        );
        
		$this->load->view('about',$data);
	}

    public function galeri(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten');
        $konten = $this->db->get()->result_array();
        $this->db->from('team');
        $team = $this->db->get()->result_array();
        $this->db->from('testimonial');
        $testimonial = $this->db->get()->result_array();
        $recentpost = $this->Konten_model->recentpost();
        $recentfooter = $this->Konten_model->recentfooter(); 
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array(); 
        $data = array(
            'judul'        => "Galeri Foto | CharisaAlele",
            'konfig'       => $konfig,
            'kategori'     => $kategori,
            'konten'       => $konten,
            'galeri'       => $galeri,
			'testimonial' => $testimonial,
            'recentpost'   => $recentpost,
            'recentfooter' => $recentfooter,
            'team'    => $team,
        );
         $this->load->view('galeri_nda', $data);
    }
    public function pelayanan(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('galeri');
        $galeri = $this->db->get()->result_array();
        $this->db->from('team');
        $team = $this->db->get()->result_array();
		$this->db->from('testimonial');
        $testimonial = $this->db->get()->result_array();
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $recentpost = $this->Konten_model->recentpost();
        $recentfooter = $this->Konten_model->recentfooter();   
        $search = $this->input->get('search');
        if(isset($search)){
            $konten = $this->Konten_model->search($search);
        } else {
            $this->db->from('konten a');
            $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
            $this->db->join('user c','a.username=c.username','left');
            $this->db->order_by('tanggal','DESC');
            $konten = $this->db->get()->result_array();
        }
        $data = array(
            'judul'   => "Beranda | CharisaAlele",
            'konfig'  => $konfig,
            'kategori' => $kategori,
            'galeri' => $galeri,
			'testimonial' => $testimonial,
            'team'    => $team,
            'caraousel' => $caraousel,
            'konten'    => $konten,
            'recentpost' => $recentpost,
            'recentfooter' => $recentfooter,

        );
        
		$this->load->view('pelayanan',$data);
    }
    public function kategori($id = null){    
    if ($id === null) {
        redirect('pelayanan');  
    }

    $this->db->from('konfigurasi');
    $konfig = $this->db->get()->row();
    $this->db->from('galeri');
    $galeri = $this->db->get()->result_array();
    $this->db->from('testimonial');
    $testimonial = $this->db->get()->result_array();
    $this->db->from('caraousel');
    $caraousel = $this->db->get()->result_array();
    $this->db->from('team');
    $team = $this->db->get()->result_array();
    $this->db->from('kategori');
    $kategori = $this->db->get()->result_array();
    $this->db->from('konten a');
    $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
    $this->db->join('user c', 'a.username=c.username', 'left');
    $this->db->where('a.id_kategori', $id);
    $konten = $this->db->get()->result_array();
    $this->db->from('kategori');
    $this->db->where('id_kategori', $id);
    $kategori_data = $this->db->get()->row();
    
    if (!$kategori_data) {
        redirect('home/kategori'); 
    }

    $nama_kategori = $kategori_data->nama_kategori;

    $data = array(
        'judul'   => $nama_kategori . " | CharisaAlele",
        'nama_kategori' => $nama_kategori,
        'konfig'  => $konfig,
        'kategori' => $kategori,
        'konten'    => $konten,
        'caraousel' => $caraousel,
        'galeri' => $galeri,
        'testimonial' => $testimonial,
        'team' => $team,
    );

    $this->load->view('kategori', $data);
}

    
}
