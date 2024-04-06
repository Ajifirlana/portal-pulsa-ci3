<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_transaksi');
        $this->load->model('M_pulsa');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
        $transaksi = $this->M_transaksi->get_all();

        $data = array(
            'judul'=>'Log Transaksi',
            'transaksi'=>$transaksi,
            'isi'=>'admin/transaksi');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function cek_transaksi(){
        $api = $this->M_pulsa->api();
     
        $header = array(
            $api['portal_userid'],
            $api['portal_key'], 
            $api['portal_secret'], 
        );

        $data = array(
        'inquiry' => 'STATUS', // konstan
        'trxid_api' => $this->input->post('trx_id'), // Trxid atau Reffid dari sisi client saat transaksi pengisian
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api['url']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);

       // echo $result;
        $data = array(
            'judul'=>'Cek Transaksi',
            'transaksi'=>$result,
            'isi'=>'admin/cek_transaksi');
            
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
   
}