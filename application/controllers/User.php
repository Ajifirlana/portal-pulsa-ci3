<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
        $user = $this->User_model->get_all();

        $data = array(
            'judul'=>'Data User',
            'user'=>$user,
            'isi'=>'admin/user/index');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    public function tambah_user(){

        $username = $this->input->post('username');
        $password= $this->input->post('password');
         $data = array('username'=>$username,
                        'password'=>$password,);
         $this->db->insert('tb_users',$data);
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil menambahkan User'.'</div>'
                   );
        redirect(base_url('user'));
    }
    public function hapus(){
          $id = $this->input->post('id');
        $this->db->where('id',$id);
        $this->db->delete('tb_users');
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil menghapus User'.'</div>'
                   );
        redirect(base_url('user'));
    }
    public function edit(){
           $id = $this->input->post('id');
      $username = $this->input->post('username');
        $password= $this->input->post('password');
        
         $data = array('username'=>$username,
                        'password'=>$password,);
        $this->db->where('id',$id);
         $this->db->update('tb_users',$data);
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil mengedit User'.'</div>'
                   );
        redirect(base_url('user'));
    }
   
}