<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('login');
	}
    public function login(){
        date_default_timezone_set('Asia/Jakarta');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username',$username);
        $user = $this->db->get()->row();
        if($user==NULL){
            $this->session->set_flashdata('alert','');
          redirect('auth');
        }else if($user->password==$password){
           $data = array(
            'username' => $user->username,
            'nama' => $user->nama,
            'level' => $user->level,
            'id_user' => $user->id_user,
            'recent_login' => date('Y-m-d H:i:s'),
           );
            $this->db->where('id_user', $user->id_user);
            $this->db->update('user', $data);
            $this->session->set_userdata($data);
            redirect('admin/home');
        }else{
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
            password salah</div>'); 
            redirect('auth');
        }

       
    } 
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}
    

