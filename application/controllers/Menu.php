<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_setting_web');
        $this->load->model('m_rajabiller');
    }
        public function kereta_api()
    {

        $stasiun= $this->m_rajabiller->station();
        $data['stasiun'] = $stasiun;
        $data['stasiun'] =$data['stasiun']['data'];
    $data['web'] = $this->m_setting_web->get();
   
    $data['title'] = $data['web']->nama_website; $data['deskripsi'] = $data['web']->deskripsi;
    $this->load->view('front/kereta_api',$data);
    
    }
       
    public function pdam()
    {  
         $data['web'] = $this->m_setting_web->get();
           
            $data['title'] = $data['web']->nama_website; 
            $data['deskripsi'] = $data['web']->deskripsi;
            
            $data['kode_pulsa']=$this->m_rajabiller->kode_pdam();
            $this->load->view('front/pdam',$data);
    }   
    public function pesawat()
    {

        $api = $this->m_rajabiller->airport();
$list_plane =  $this->m_rajabiller->list_plane();
$data['rute'] = $api;
$data['rute'] = $data['rute']["data"];

 $data['web'] = $this->m_setting_web->get();
   
    $data['title'] = $data['web']->nama_website; 
    $data['deskripsi'] = $data['web']->deskripsi;
    $this->load->view('front/pesawat',$data);
    }
    public function pelni()
    {
  
        $origin = $this->m_rajabiller->origin();
        $data['origin'] =$origin["data"];
              
        $data['web'] = $this->m_setting_web->get();
   
        $data['title'] = $data['web']->nama_website; 
        $data['deskripsi'] = $data['web']->deskripsi;
        $this->load->view('front/pelni',$data);
    }
    public function pulsa()
    {
    
 $data['web'] = $this->m_setting_web->get();
   
 $data['title'] = $data['web']->nama_website; 
 $data['deskripsi'] = $data['web']->deskripsi;
 $this->load->view('front/pulsa',$data);
    }

}