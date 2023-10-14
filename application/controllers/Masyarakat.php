<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		cekLogin();
		$this->load->model('Masyarakat_m');
	}
	public function index()
    {

		$this->data['title'] = 'Masyarakat';
        $this->data['content'] = 'masyarakat/index';
        $this->data['user'] = infoLogin();
		$this->data['userData'] = $this->Masyarakat_m->get();
		$this->load->view('component/main-backend', $this->data);
	}

    public function store()
    {
        $this->Masyarakat_m->store();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di tambahkan.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('masyarakat');
    }

    public function show($id = '')
    {
        $this->Masyarakat_m->show($id);
    }

    public function update($id)
    {
        $this->Masyarakat_m->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di ubah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('masyarakat');
    }

    public function destroy($id = '')
    {
        $this->Masyarakat_m->destroy($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di hapus.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
    }
	
}
