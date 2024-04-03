<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_order_pesawat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_penerbangan');
        $this->load->library('form_validation');
        if($this->session->userdata('role')!= 'admin'){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
        $transaksi = $this->M_penerbangan->get_order_pesawat();

        $data = array(
            'judul'=>'Data Order Tiket Pesawat',
            'transaksi'=>$transaksi,
            'isi'=>'admin/pesawat_db/data_order_tiket_pesawat');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    
    public function hapus(){
        $id = $this->input->post('id');
      $this->db->where('id',$id);
      $this->db->delete('data_order_pesawat');
      $this->session->set_flashdata('msg',
                   '
                   <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil menghapus Kode Booking'.'</div>'
                 );
      redirect(base_url('data_order_pesawat'));
  }
  function bayar_booking(){
    
    $airlineCode = $this->input->post('airlineCode');
    $kode_booking = $this->input->post('kode_booking');
    $transaction_id= $this->input->post('transaction_id');
    $bayar = $this->M_penerbangan->bayar_booking_pesawat($airlineCode,$kode_booking,$transaction_id);
   
    $transaction_id = $bayar['data']['transaction_id'];
    $url_etiket = $bayar['data']['url_etiket'];
    $url_image = $bayar['data']['url_image'];
    $url_struk = $bayar['data']['url_struk'];
    $nominal = $bayar['data']['nominal'];

    $log= 'ID Transaksi :'.$transaction_id.' URL Etiket :'.$url_etiket.' URl image :'.$url_image.' URL Struk :'.$url_struk.' Nominal :'.$nominal;
    $data = array('log'=>$log,
  'tanggal'=>date('d-m-Y'));	
$this->db->insert('transaksi',$data);
$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.json_decode( $bayar,true).'</div>'
                   );
redirect(base_url('data_order_pesawat'));
  }
   
}