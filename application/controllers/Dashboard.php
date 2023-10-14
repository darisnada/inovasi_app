<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Setting_m');
	}
	public function index()
	{

		$this->data['title'] = 'Dashboard';
		$this->data['content'] = 'dashboard/index';
		$this->data['user'] = infoLogin();
		$this->data['setting'] = $this->Setting_m->get();
		$this->load->view('component/main-backend', $this->data);
	}
}
