<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_rekening extends CI_Model
{

    function get_all(){
        
        $result = $this->db->get('rekening')->result(); 
        return $result;
    }
}
