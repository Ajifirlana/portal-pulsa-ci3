<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	 public function __construct() {
        parent::__construct();
       
        $this->load->model('Pengguna_model');
        $this->load->model('m_setting_web');
    }
    public function index() {

    $data['web'] = $this->m_setting_web->get();    
    $data['title'] = $data['web']->nama_website;
    $data['deskripsi'] = $data['web']->deskripsi;
        $this->load->view('auth/login_pelanggan',$data);
    }
    

        public function auth(){

        function anti_injection($data)
        {
          $filter  = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
          return $filter;
        }
        $username =anti_injection($this->input->post('username')) ;
        // print_r($username);
        // exit;
        $password = anti_injection($this->input->post('password'));
       
        $cek_user = $this->Pengguna_model->authUser($username, $password);

        if(!empty($cek_user)) {

                $data = array(
                'username' => $cek_user->username,
                'no_hp' => $cek_user->no_hp, 
                'id' => $cek_user->id,
                'email'=> $cek_user->email,
                'password' => $cek_user->password,
                'role' => 'pelanggan'
                );
 
            $this->session->set_userdata($data);
            redirect(base_url('/'));
        }else{ 

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username dan Password salah!</div>');
        redirect(base_url('pelanggan'));
        }
        
    }
}
