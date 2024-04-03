<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_setting_web extends CI_Model
{

    function get(){
        
        $this->db->where('id', '1');
        $result = $this->db->get('setting_website')->row(); 
        return $result;
    }
}
