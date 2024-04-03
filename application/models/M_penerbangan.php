<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_penerbangan extends CI_Model
{

    public $table = 'tb_pesawat';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    function get_order_pesawat()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get('data_order_pesawat')->result();
    }
    function bayar_booking_pesawat($airlineCode,$kode_booking,$transaction_id){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rajabiller.fastpay.co.id/travel/flight/payment',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "airline": "'.$airlineCode.'",
  "transactionId": "'.$transaction_id.'",
  "bookingCode": "'.$kode_booking.'",
  "paymentCode": "",
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IjhkNzNtbmc4OWVkIn0.eyJpc3MiOiJodHRwczpcL1wvdHJhdmVsLnJhamFiaWxsZXIuY29tIiwiYXVkIjoiUmFqYWJpbGxlciBUcmF2ZWwgQXBpIiwianRpIjoiOGQ3M21uZzg5ZWQiLCJpYXQiOjE2OTA0NzI4NDksIm5iZiI6MTY5MDQ3MjkwOSwiZXhwIjoxNjkwNDc2NDQ5LCJvdXRsZXRJZCI6IlNQMzEwOTIzIiwicGluIjoiMjI4MDc4Iiwia2V5IjoiRkFTVFBBWSJ9.WxeZKV4EGeNyJ-Qv7Hn5PFbiDqvv-twb2PRxxZxDfds"
}',
));
$response = curl_exec($curl);
curl_close($curl);
return json_decode( $response,true);

    }
}