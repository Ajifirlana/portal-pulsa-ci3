<?php

    header("Connection: Keep-alive"); 
    error_reporting (E_ALL ^ E_NOTICE);
defined('BASEPATH') or exit('No direct script access allowed');

class Pelni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        
        $this->load->model('m_rajabiller');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }

    public function index(){

        
$origin = $this->m_rajabiller->origin();
$body_array =$origin["data"];
      
     $data =array(
         'judul'=>'DAFTAR KODE PELABUHAN',
        'isi'    => 'admin/pelni/utama',
        'data_tiket'=>$body_array);

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    public function cari_pelni(){


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://rajabiller.fastpay.co.id/travel/pelni/search',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{
            "origin" : 563,
            "destination" : 431,
            "startDate" : "2023-07-21",
            "endDate" : "2023-07-21",
            "token" : "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IjhkNzNtbmc4OWVkIn0.eyJpc3MiOiJodHRwczpcL1wvdHJhdmVsLnJhamFiaWxsZXIuY29tIiwiYXVkIjoiUmFqYWJpbGxlciBUcmF2ZWwgQXBpIiwianRpIjoiOGQ3M21uZzg5ZWQiLCJpYXQiOjE2ODk4MzcwNzIsIm5iZiI6MTY4OTgzNzEzMiwiZXhwIjoxNjg5ODQwNjcyLCJvdXRsZXRJZCI6IlNQMzEwOTIzIiwicGluIjoiMjI4MDc4Iiwia2V5IjoiRkFTVFBBWSJ9.BDrgZMkYztdNB6e00TTvI7QBpbW1hRzOANBweLPZlp0"
        }',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $body= $response;
        
        $info = $body;
        $hidden="";
        
        $data =array(
         'judul'=>'CARI JADWAL PELNI',
        'isi'    => 'admin/pelni/jadwal_pelni',
        'hidden'=> $hidden,
        'info'=>$info,
        'data_tiket'=>$body_array);

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}