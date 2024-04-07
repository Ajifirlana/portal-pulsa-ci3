<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('m_setting_web');
        $this->load->model('User_model');
        $this->load->model('M_pulsa');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }
    public function index(){
    
    $val ='S';
    $result=$this->portal($val);
    $balance = 0;
    if ($result==NULL) {
    $message = "Gagal Konek ke Server";
    $balance =0;
    }else{
        $message =$result->message;
    }
		$kd_pulsa = $this->M_pulsa->get_all();
	
    $data = array(
		'judul'=>'Dashboard',
		'kode_pulsa'	 => '' . count($kd_pulsa) . '',
        'status'=> $message,
		'saldo'	 => 'Rp. '.$balance,
    	'isi'    => 'admin/dasbor/utama'
		);
    // print_r($data);exit;
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function portal($val){

   $api = $this->M_pulsa->api();
    
    $data = array(
    'inquiry' => $val);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api['url']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $api['header']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    $result = json_decode($result);
    return $result;
    }
    function harga(){

    $api = $this->M_pulsa->api();
$data = array(
'inquiry' => 'HARGA', // konstan
'code' => 'PLN', // pilihan: pln, pulsa, game
);
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api['url']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $api['header']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$row = json_decode($result,true);

   $data = array(
			'judul'=>'Dashboard',
			'harga'=>$row["message"],
			'isi'    => 'admin/harga');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function cekharga(){
      $api = $this->M_pulsa->api();
     
      $code = $this->input->post('code');
      $header = array(
          $api['portal_userid'],
          $api['portal_key'], 
          $api['portal_secret'], );
        
      $data = array(
      'inquiry' => 'HARGA', // konstan
      'code' => $code, // pilihan: pln, pulsa, game
      );

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $api['url']);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      $harga = curl_exec($ch);
      $row = json_decode($harga,true);
                    

    	$data = array(
			'judul'=>'Data Harga '.$code,
			'harga'=>$row["message"],
			'isi'    => 'admin/harga');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function deposit(){

    	$data = array('judul'=>'Deposit Saldo',
    		'kode_pulsa'=>$this->M_pulsa->get_all(),
    		'isi'=>'admin/deposit');
    	$this->load->view('admin/layout/wrapper', $data, FALSE);	
    }
    public function proses_deposit(){
      $api = $this->M_pulsa->api();
     
$header = array(
  $api['portal_userid'],
  $api['portal_key'], 
  $api['portal_secret'], );
  	$bank = $this->input->post('bank');
	$nominal = $this->input->post('nominal');

$data = array(
'inquiry' => 'D', // konstan
'bank' => $bank, // bank tersedia: bca, bni, mandiri, bri, muamalat
'nominal' => $nominal, // jumlah request
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,  $api['url']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$result = json_decode($result);
$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      '.$result->message.'.
                     </div>'
                   );
redirect(base_url('dashboard/deposit'));
    }
    public function isi_pulsa(){

        $kode_pulsa= $this->M_pulsa->get_kode_pulsa();
    	$data = array('judul'=>'Pulsa',
    		'kode_pulsa'=>$this->M_pulsa->get_kode_pulsa(),
    		'isi'=>'admin/pulsa/isi_pulsa');
    $this->load->view('admin/layout/wrapper', $data, FALSE);	
    }

    public function proses_isi_pulsa(){
      $api = $this->M_pulsa->api();
     
		$header = array(
      $api['portal_userid'],
      $api['portal_key'], 
      $api['portal_secret'], 
     );

    $no_hp = $this->input->post('no_hp');
  $idcust = $this->input->post('idcust');
  $pulsa = $this->input->post('code');
$pulsa = $this->input->post('code');
$trx_ke = $this->input->post('trx_ke');
$trxid = $this->input->post('trxid');

	$data = array(
	'inquiry' => 'I', // konstan
	'code' => $pulsa, // kode produk
	'phone' => $no_hp, // nohp pembeli
	'idcust' => $idcust, 
	'trxid_api' => $trxid, 
	'no' => $trx_ke, // untuk isi lebih dari 1x dlm sehari, isi urutan 1,2,3,4,dst
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
	$row = json_decode($result);
	
	if ($row->result == 'failed') {

$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      '.$row->message.'.
                     </div>'
                   );
	redirect(base_url('dashboard/isi_pulsa'));
	}else{
		$hrg = $this->M_pulsa->get_harga($pulsa);

$data = array('kategori'=>$hrg->kategori,
	'no_hp'=>$no_hp,'harga'=>$hrg->harga,
  'tanggal'=>date('d-m-Y'));	
$this->db->insert('transaksi',$data);
$this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">
                      '.$row->message.'. dengan Harga Rp. '.number_format($hrg->harga).'</div>'
                   );
	redirect(base_url('dashboard/isi_pulsa'));
	}
    }
}