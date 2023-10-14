<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		cekLogin();
		$this->load->model('User_m');
	}
	public function index()
    {

		$this->data['title'] = 'Users';
        $this->data['content'] = 'user/index';
        $this->data['user'] = infoLogin();
		$this->data['userData'] = $this->User_m->get();
		$this->load->view('component/main-backend', $this->data);
	}
	public function changePassword()
    {

		$this->data['title'] = 'Ubah Password';
        $this->data['content'] = 'auth/update-password';
        $this->data['user'] = infoLogin();
		$this->load->view('component/main-backend', $this->data);
	}

    public function updatePass()
    {
        $user = $this->db->get_where('users', ['username' => $this->session->userdata('username')])->row_array();
			$password = $this->input->post('password_old');
			$new_pass = $this->input->post('password_new');
			$confirm_pass = $this->input->post('password_confirm');

			if (!password_verify($password, $user['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Gagal!</strong> Password salah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
				redirect('user/changePassword');
			} else {
				if ($confirm_pass != $new_pass) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Gagal!</strong> Password tidak terkonfirmasi.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
					redirect('user/changePassword');
				} else {
					$this->db->set('password', password_hash($new_pass, PASSWORD_DEFAULT));
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('users');
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di ubah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
					redirect('user/changePassword');
				}
			}
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

    public function update($id)
    {
        $this->User_m->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di ubah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('user');
    }

    public function destroy($id = '')
    {
        $this->User_m->destroy($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Data berhasil di hapus.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
    }
	
}
