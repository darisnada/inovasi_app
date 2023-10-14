<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		cekLogin();
		$this->load->model('User_m');
	}
	public function index()
    {

		$this->data['title'] = 'Pengaturan';
        $this->data['content'] = 'setting/index';
        $this->data['user'] = infoLogin();
		// $this->data['userData'] = $this->User_m->get();
		$this->load->view('component/main-backend', $this->data);
	}

    public function store()
    {
        $this->User_m->store();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di tambahkan.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('user');
    }

    public function show($id = '')
    {
        $this->User_m->show($id);
    }
	
}
