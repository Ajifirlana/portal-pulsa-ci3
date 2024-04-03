<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('m_setting_web');
        $this->load->model('Pengguna_model');
     }
    public function index() {
$data['web'] = $this->m_setting_web->get();  
$data['title'] = $data['web']->nama_website;
$data['deskripsi'] = $data['web']->deskripsi;
       $this->load->view('auth/register',$data);
    }
    public function create_account(){

        function anti_injection($data)
        {
          $filter  = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
          return $filter;
        }
        $username = anti_injection($this->input->post('username'));
        $password = sha1(anti_injection($this->input->post('password')));
        
        $cek_user = $this->Pengguna_model->cek_data(htmlspecialchars($username), $password);

        if(empty($cek_user)) {
        	$data = array('username'=>$username,
        		'password'=>$password);
        	$this->db->insert('pengguna',$data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Register Berhasil!</div>');
        }else{

                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username dan Password sudah Ada!</div>');
        }
        redirect(base_url('register'));
    }
}