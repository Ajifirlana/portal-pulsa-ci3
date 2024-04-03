<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rute_pesawat extends CI_Model {

    public $table = 'tb_pesawat';
    public $id = 'id';
    public $order = 'DESC';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	 function pesawat_db()
    {

     	$this->db->select('*');
                $this->db->from('tb_pesawat');
        $query = $this->db->get(); 
        return $query->result();
    }
     function hasil_pencarian_db($keberangkatan,$tujuan,$kelas_penerbangan)
    {
        
        $this->db->where('keberangkatan', $keberangkatan);
        $this->db->where('tujuan', $tujuan);
        $this->db->where('kelas_penerbangan', $kelas_penerbangan);
        $this->db->order_by('harga', 'ASC');
        $result = $this->db->get('tb_pesawat')->result();  
        return $result;
    }

}