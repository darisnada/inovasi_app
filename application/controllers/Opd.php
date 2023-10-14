<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Opd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekLogin();
        $this->load->model('Agency_m');
        $this->load->model('Setting_m');
    }
    public function index()
    {

        $this->data['title'] = 'Data OPD';
        $this->data['content'] = 'opd/index';
        $this->data['user'] = infoLogin();
        $this->data['opd'] = $this->Agency_m->get();
        $this->data['setting'] = $this->Setting_m->get();
        $this->load->view('component/main-backend', $this->data);
    }

    public function store()
    {
        $this->Agency_m->store();
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di tambahkan.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('opd');
    }

    public function show($id = '')
    {
        $this->Agency_m->show($id);
    }

    public function update($id)
    {
        $this->Agency_m->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di ubah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('opd');
    }

    public function destroy($id = '')
    {
        $this->Agency_m->destroy($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di hapus.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
    }
}
