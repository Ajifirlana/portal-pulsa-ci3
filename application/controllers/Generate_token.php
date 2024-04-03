<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate_token extends CI_Controller {
	public function __construct() {
        parent::__construct();
        
        $this->load->helper(array('url','html','file','form','download'));
        if($this->session->userdata('role')!= "admin"){
        	redirect(base_url('login/logout'));
        }
    }
    
    public function index() {
        
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rajabiller.fastpay.co.id/travel/app/sign_in',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>' {
      "outletId" : "SP310923",
      "pin" : "228078",
      "key" : ""
 }',
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response,true);
$data= array('token' => $data["token"]);
print_r($data);
// $this->db->where('id',1);
// $this->db->update('token_rajabiller',$data);
// redirect(base_url('server_two'));
       
}
}
