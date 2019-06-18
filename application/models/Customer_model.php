<?php
class Customer_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_customer($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('customer');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('customer', array('id' => $slug));
		return $query->row_array();
	}
	
	public function get_customer_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('customer');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('customer', array('id' => $id));
		return $query->row_array();
	}
	
	public function set_customer($id = 0)
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('nama'), 'dash', TRUE);

		$data = array (
 		   'id' => $this->input->post('id'),
		   'nama' =>$this->input->post('nama'),
		   'email' =>$this->input->post('email'),
		   'notelp' =>$this->input->post('notelp')
		);
		
		if ($id == 0) {
			return $this->db->insert('customer', $data);
		} else {
			$this->db->where('id', $id);
			return $this->db->update('customer', $data);
		}
	}
	
	public function delete_sewa($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('customer');
	}
}