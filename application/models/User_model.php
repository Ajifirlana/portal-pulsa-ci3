<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public $table = 'tb_users';
    public $id = 'id';
    public $order = 'DESC';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function authUser($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('tb_users')->row(); 
        return $result;
    }

    public function listing() {
		$this->db->select('*');
		$this->db->from('tb_users');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}
	function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */