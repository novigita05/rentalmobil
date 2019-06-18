<?php
class Index extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['produk'] = $this->produk_model->get_produk();
		$data['title'] = 'Data Mobil';
		
		$this->load->view('templates/headerfront', $data);
		$this->load->view('view/frontend/front', $data);
		$this->load->view('templates/footer', $data);
	}
	public function contact(){
		$this->load->view('templates/headerfront', $data);
		$this->load->view('view/frontend/contact', $data);
		$this->load->view('templates/footer', $data);
	}
	public function indexadmin()
	{
		$data['produk'] = $this->produk_model->get_produk();
		$data['title'] = 'Data Mobil';
		
		$this->load->view('templates/header', $data);
		$this->load->view('view/index', $data);
		$this->load->view('templates/footer', $data);
	}
}