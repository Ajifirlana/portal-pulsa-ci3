<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function cek_data($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('pengguna')->row(); 
        return $result;
    }
    public function authUser($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', sha1($password));
        $result = $this->db->get('pengguna')->row(); 
        return $result;
    }
}