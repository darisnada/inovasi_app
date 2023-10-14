<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Innovation extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		cekLogin();
		$this->load->model('Innovation_m');
        $this->load->model('Agency_m');
	}
	public function index()
    {
        $agency_id = $this->input->get('agency_id');
		$this->data['title'] = 'Data Inovasi';
        $this->data['content'] = 'innovation/index';
        $this->data['user'] = infoLogin();
		$this->data['data'] = $this->Innovation_m->get($agency_id);
		$this->data['agencyData'] = $this->Agency_m->get();
		$this->load->view('component/main-backend', $this->data);
	}

    public function store()
    {
        $this->Innovation_m->store();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di tambahkan.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('innovation');
    }

    public function show($id = '')
    {
        $this->Innovation_m->show($id);
    }

    public function update($id)
    {
        $this->Innovation_m->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di ubah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('innovation');
    }

    public function destroy($id = '')
    {
        $this->Innovation_m->destroy($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di hapus.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
    }
	
}
