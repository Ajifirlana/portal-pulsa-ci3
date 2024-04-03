<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        $this->load->model('m_setting_web');
    }

    public function index(){ 

        $web = $this->m_setting_web->get();
        $data = array(
            'row'=>$web,
            'judul'=>'Setting Web',
            'isi'    => 'admin/website/setting');

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    public function update(){
        $id = '1';
        $data = array('nama_website'=>$this->input->post('nama_website'),
            'deskripsi'=>$this->input->post('deskripsi'),
            'no_hp'=>$this->input->post('no_hp'),
            'email'=>$this->input->post('email'),
            'alamat'=>$this->input->post('alamat'));
           $this->db->where('id',$id);
         $this->db->update('setting_website',$data);
           $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil Mengedit Website'.'</div>'
                   );
        redirect(base_url('setting'));
    }
}