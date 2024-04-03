<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_pesawat extends CI_Controller
{ 
	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('model_rute_pesawat');
    }
      public function index(){
        $transaksi = $this->model_rute_pesawat->pesawat_db();

        $data = array(
            'judul'=>'Data Pesawat',
            'transaksi'=>$transaksi,
            'isi'=>'admin/pesawat_db/data_pesawat');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    public function update(){

    $id=$this->input->post('id');
           $data = array(

    'nama_pesawat'=>$this->input->post('nama_pesawat'),
    'kode_pesawat'=>$this->input->post('kode_pesawat'),
    'jam_keberangkatan'=>$this->input->post('jam_keberangkatan'),
    'jam_tiba'=>$this->input->post('jam_tiba'),
    'harga'=>$this->input->post('harga'),
    'tersedia'=>$this->input->post('tersedia'),
    'keberangkatan'=>$this->input->post('keberangkatan'),
    'tujuan'=>$this->input->post('tujuan'),
    'kelas_penerbangan'=>$this->input->post('kelas_penerbangan'));
    
        $this->db->where('id',$id);
         $this->db->update('tb_pesawat',$data);
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil Mengedit Pesawat'.'</div>'
                   );
        redirect(base_url('data_pesawat'));
    }
}