<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Orderan_saya extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_setting_web');
        $this->load->model('tiket_kai_model');
        $this->load->model('tiket_pesawat_model');
        $this->load->model('m_rajabiller');
        $this->load->model('m_rekening');
                
        $this->load->helper(array('url','html','file','form','download'));
        if($this->session->userdata('role')!= "pelanggan"){
        	redirect(base_url('login/logout'));
        }
    }

    public function kereta_api() {
        
    $data['web'] = $this->m_setting_web->get();    
    $data['title'] = $data['web']->nama_website;
    $data['deskripsi'] = $data['web']->deskripsi;
    $data['menu_title'] = "Orderan Tiket KAI";
    $data['orderan_saya']=$this->tiket_kai_model->orderan_saya();

    $data['rekening'] = $this->m_rekening->get_all();    

        $this->load->view('orderan_saya',$data);
    }
    
    public function pesawat(){
      
    $data['web'] = $this->m_setting_web->get();    
    $data['title'] = $data['web']->nama_website;
    $data['deskripsi'] = $data['web']->deskripsi;
    $data['menu_title'] = "Orderan Tiket Pesawat";
    
    $data['orderan_saya']=$this->tiket_pesawat_model->orderan_saya();

    $data['rekening'] = $this->m_rekening->get_all();    
      $this->load->view('front/orderan_pesawat',$data);
    }
    public function order_tiket_pesawat(){
        $nama_depan=$this->input->post('nama_depan');
        $nama_belakang=$this->input->post('nama_belakang');
           $titel=$this->input->post('titel');
           $airlineCode =$this->input->post('airlineCode');
            $departure=$this->input->post('departure');
          $arrival=$this->input->post('arrival');
          $departureDate =$this->input->post('departureDate');
          $seat =$this->input->post('seat');
        
          
$data['web'] = $this->m_setting_web->get();    
$data['title'] = $data['web']->nama_website;
$data['deskripsi'] = $data['web']->deskripsi;
$data['menu_title'] = "Booking Tiket Pesawat";

$response=$this->m_rajabiller->booking_pesawat($titel,$nama_depan,$nama_belakang,$airlineCode,$departure,$arrival,$departureDate,$seat);
$data['response'] =json_decode($response,true);
$data['response'] = $data['response'];
$data['airlineCode'] = $airlineCode;
$data['departure'] = $departure;
$data['arrival'] = $arrival;
$data['seat'] = $seat;
$this->load->view('front/booking_pesawat',$data);
      
    }
    public function simpan_booking(){
      $data = array('id_pembeli' => $this->session->userdata('id'),
    'nama_lengkap'=>$this->input->post('passengers'),
    'airlineCode'=>$this->input->post('airlineCode'),
    'kode_booking'=>$this->input->post('bookingCode'),
    'total_bayar'=>$this->input->post('nominal'),
    'departuretime'=>$this->input->post('departureTime1'),
    'arrivaltime'=>$this->input->post('arrivalTime1'),
    'reservationdate'=>$this->input->post('reservationDate'),
    'timelimit'=>$this->input->post('timeLimit'),
    'transaction_id'=>$this->input->post('transaction_id'),
    
  );
  $this->db->insert('data_order_pesawat',$data);
  redirect(base_url('orderan_saya/pesawat'));
    }
    
    public function bayar_kai() {
      
      $config['upload_path']          = './uploads/bukti_bayar_kai/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 5000;
      $config['max_width']            = 1024;
      $config['max_height']           = 768;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('image'))
      {

        $error = $this->upload->display_errors('<p>', '</p>');
          $this->session->set_flashdata('msg',
             '
             <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times; &nbsp;</span>
                </button>
                <strong>Gagal!</strong>
             </div>'
           );
      }else{
        
        $gbr = $this->upload->data();

        $filename = $gbr['file_name'];
        $image     = preg_replace('/ /', '_', $filename);

        $data = array(
        'bukti_bayar' => $image);

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_order_kereta', $data);
            
      }   
      redirect(base_url('orderan_saya/kereta_api'));
    }
    public function bayar_pesawat() {
        
              $config['upload_path']          = './uploads/bukti_bayar_pesawat/';
              $config['allowed_types']        = 'gif|jpg|png';
              $config['max_size']             = 5000;
              $config['max_width']            = 1024;
              $config['max_height']           = 768;
       
              $this->load->library('upload', $config);
       
              if ( ! $this->upload->do_upload('image'))
              {
                  $error = $this->upload->display_errors('<p>', '</p>');
                  $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times; &nbsp;</span>
                        </button>
                        <strong>Gagal!</strong>
                     </div>'
                   );
              }else{
                
                $gbr = $this->upload->data();

                $filename = $gbr['file_name'];
                $image     = preg_replace('/ /', '_', $filename);

                $data = array(
                'bukti_bayar' => $image);
                
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('data_order_pesawat', $data);
                    
              }
                 redirect(base_url('orderan_saya/pesawat'));
             
    }
}
