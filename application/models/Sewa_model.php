<?php
class Sewa_model extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_sewa($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('sewa');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('sewa', array('id' => $slug));
		return $query->row_array();
	}
	
	public function get_sewa_by_id($id = 0)
	{
		if ($id === 0)
		{
			$query = $this->db->get('sewa');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('sewa', array('nosewa' => $id));
		return $query->row_array();
	}
	
	public function set_sewa($id = 0)
	{
		$this->load->helper('url');
		
		$slug = url_title($this->input->post('nama'), 'dash', TRUE);

		$data = array (
 		   'nosewa' => $this->input->post('nosewa'),
		   'id' =>$this->input->post('id'),
		   'tanggalsewa' =>$this->input->post('tanggalsewa'),
		   'jam' =>$this->input->post('jam'),
		   'nopol' =>$this->input->post('nopol'),
		   'status' =>$this->input->post('status')
		);
		
		if ($id == 0) {
			return $this->db->insert('sewa', $data);
		} else {
			$this->db->where('nosewa', $id);
			return $this->db->update('sewa', $data);
		}
	}
	
	public function delete_sewa($id)
	{
		$this->db->where('nosewa', $id);
		return $this->db->delete('sewa');
	}
}