<?php

class Admin extends MY_Controller{
	
	public function __construct(){
		parent::__construct();

		//memanggil function dari  MY_Controller
		$this->cekLogin();

	}

	public function index(){
		$this->load->view('Templates/header');
		$this->load->view('View/index');
	}
}
