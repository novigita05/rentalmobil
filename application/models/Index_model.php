<?php
class Index_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function data(){
		$this->db->select('*');
		$this->db->from('produk');
		$data = $this->db->get();
		return $data->result();
	}
}