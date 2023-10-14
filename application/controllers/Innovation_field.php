<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Innovation_field extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		cekLogin();
		$this->load->model('InnovationField_m');
        $this->load->model('Setting_m');
	}
	public function index()
    {

		$this->data['title'] = 'Fokus Bidang';
        $this->data['content'] = 'innovation_field/index';
        $this->data['user'] = infoLogin();
		$this->data['data'] = $this->InnovationField_m->get();
		$this->data['setting'] = $this->Setting_m->get();
		$this->load->view('component/main-backend', $this->data);
	}

    public function store()
    {
        $this->InnovationField_m->store();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di tambahkan.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('innovation_field');
    }

    public function show($id = '')
    {
        $this->InnovationField_m->show($id);
    }

    public function update($id)
    {
        $this->InnovationField_m->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di ubah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('innovation_field');
    }

    public function destroy($id = '')
    {
        $this->InnovationField_m->destroy($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di hapus.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
    }
	
}
