<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_model extends CI_Model {
    public function update($namafoto) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'info' => $this->input->post('info'),
            'foto' => $namafoto
        );
        
        $where = array('foto' => $this->input->post('nama_foto'));
        $this->db->update('team', $data, $where);
    }
    
}
