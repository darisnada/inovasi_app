<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cekLogin();
	}
	public function index()
	{

		$this->data['title'] = 'Dashboard';
		$this->data['content'] = 'dashboard/index';
		$this->data['user'] = infoLogin();
		$this->load->view('component/main-backend', $this->data);
	}
}
