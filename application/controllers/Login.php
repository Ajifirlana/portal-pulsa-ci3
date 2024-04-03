<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
       
        $this->load->model('User_model');
        $this->load->model('m_setting_web');
    }

    public function index() {

    $data['web'] = $this->m_setting_web->get();    
    $data['deskripsi'] = $data['web']->deskripsi;
    $data['title'] = $data['web']->nama_website;
        $tgl_sekarang = date("Y");
        $tgl_exp ="2025";
      if ($tgl_sekarang >=$tgl_exp) {
        echo'<script type="text/javascript" language="javascript">
                alert("Expired...!!!");
              </script>';
      }else{

        $this->load->view('auth/login',$data);}
    }
    public function auth(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data['token'] = $this->security->get_csrf_hash();
        $cek_user = $this->User_model->authUser($username, $password);

        if(!empty($cek_user)) {

                $data = array(
                'username' => $cek_user->username,
                'id' => $cek_user->id,
                'password' => $cek_user->password,
                'role' => 'admin'
                );
 
            $this->session->set_userdata($data);
            redirect(base_url('dashboard'));
        }else{ 

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username dan Password salah!</div>');
        redirect(base_url('login'));
        }
        
    }
    public function logout() {

        $this->session->sess_destroy();
        redirect(base_url('login'));
        }

    }

?>
