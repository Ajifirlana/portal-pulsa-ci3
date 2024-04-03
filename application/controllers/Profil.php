<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_setting_web');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }

    public function pengaturan() {


    $data['web'] = $this->m_setting_web->get();    
    $data['title'] = $data['web']->nama_website;
    $data['deskripsi'] = $data['web']->deskripsi;

        $this->load->view('pengaturan',$data);
    }

    public function update() {
    	if (empty($this->session->userdata('id'))) {
        	redirect(base_url('/'));
    	}
         $data = array('username'=>$this->input->post('username'),
                        'no_hp'=>$this->input->post('no_telpon'),
                        'email'=>$this->input->post('email'));
        $this->db->where('id',$this->session->userdata('id'));
         $this->db->update('pengguna',$data);

        	redirect(base_url('profil/pengaturan'));
    }

}
