<?php
class Produk_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_produk($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('produk');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('produk', array('merkmobil' => $slug));
		return $query->row_array();
	}
	
	public function get_produk_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('produk');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('produk', array('nopol' => $id));
		return $query->row_array();
	}
	
	public function set_produk($id = 0)
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('name'), 'dash', TRUE);

		$data = array (
 		   'nopol' => $this->input->post('nopol'),
		   'merkmobil' =>$this->input->post('merkmobil'),
		   'harga' =>$this->input->post('harga')
		);
		
		if ($id == 0) {
			return $this->db->insert('produk', $data);
		} else {
			$this->db->where('nopol', $id);
			return $this->db->update('produk', $data);
		}
	}
	
	public function delete_produk($id)
	{
		$this->db->where('nopol', $id);
		return $this->db->delete('produk');
	}
}