<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket_pesawat_model extends CI_Model {

    public $table = 'data_order_pesawat';
    public $id = 'id';
    public $order = 'DESC';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
    function orderan_saya()
    {
        
        $this->db->where('id_pembeli',$this->session->userdata('id'));
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }
}