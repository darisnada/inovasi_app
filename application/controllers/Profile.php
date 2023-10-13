<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cekLogin();
        $this->load->model('User_m');
    }
    public function index()
    {
        $this->data['title'] = 'Profile';
        $this->data['content'] = 'profile/change-password';
        $this->data['user'] = infoLogin();
        $this->load->view('component/main-backend', $this->data);
    }


    public function changePassword()
    {
        $this->data['title'] = 'Profile';
        $this->data['content'] = 'profile/change-password';
        $this->data['user'] = infoLogin();

        $this->form_validation->set_rules('password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password', 'New Password', 'required|trim|matches[repeat_password]');
        $this->form_validation->set_rules('repeat_password', 'Confirm Password', 'required|trim|matches[new_password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('component/main-backend', $this->data);
        } else {
            $password = $this->input->post('password');
            $new_password = $this->input->post('new_password');

            if (!password_verify($password, $this->data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Error!</strong> Password salah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
                redirect('profile');
            } else {
                if ($password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Error!</strong> Password baru tidak boleh sama dengan password lama.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
                    redirect('profile');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash)->where('username', $this->session->userdata('username'))->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Berhasil update password.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
                    redirect('profile');
                }
            }
        }
    }
}
