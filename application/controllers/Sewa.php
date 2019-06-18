<?php
class Sewa extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sewa_model');
		$this->load->helper('url_helper');
	}
	
	public function sewa()
	{
		$data['sewa'] = $this->sewa_model->get_sewa();
		$data['title'] = 'Data Sewa';
		
		$this->load->view('templates/header', $data);
		$this->load->view('view/sewa/sewa', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function view($slug = NULL)
	{
		$data['sewa_item'] = $this->sewa_model->get_sewa($slug);
		
		if (empty($data['sewa_item']))
		{
			show_404();
		}
		
		$data['nosewa'] = $data['sewa_item']['nosewa'];
		
		$this->load->view('templates/header', $data);
		$this->load->view('view/sewa/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function createsewa()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Tambah data sewa';
		
		$this->form_validation->set_rules('nosewa', 'Nosewa', 'required');
		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('tanggalsewa', 'Tanggalsewa', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('nopol', 'Nopol', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
		    $this->load->view('view/sewa/createsewa');
		    $this->load->view('templates/footer');
		}
		
		else
		{
			$this->sewa_model->set_sewa();
			$this->load->view('templates/header', $data);
		    $this->load->view('view/success');
		    $this->load->view('templates/footer');
		}
	}
	
	public function edit()
	{
		$id = $this->uri->segment(3);

		if (empty($id))
		{
			show_404();
		}

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Edit data sewa';
		$data['sewa_item'] = $this->sewa_model->get_sewa_by_id($id);

		$this->form_validation->set_rules('nosewa', 'Nosewa', 'required');
		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('tanggalsewa', 'Tanggalsewa', 'required');
		$this->form_validation->set_rules('jam', 'Jam', 'required');
		$this->form_validation->set_rules('nopol', 'Nopol', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('view/sewa/edit', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$this->sewa_model->set_sewa($id);
			//$this->load->view('news/success');
			redirect(base_url() . 'sewa/sewa');
		}
	}
	
	public function delete()
	{
		$id = $this->uri->segment(3);
		
		if (empty($id))
		{
			show_404();
		}
		
		$sewa_item = $this->sewa_model->get_sewa_by_id($id);
		
		$this->sewa_model->delete_sewa($id);
		redirect(base_url() . 'sewa/sewa');
	}
	
}