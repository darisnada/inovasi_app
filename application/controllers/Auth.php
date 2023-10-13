<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->_rules();
		if($this->form_validation->run() == false ){
			$this->data['title'] = 'Sign In';
			$this->data['content'] = 'auth/index';
			$this->load->view('component/main-auth', $this->data);
		} else{
			$this->_login();
		}
	}

	private function _rules()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	}
	private function _login(){
		$username = htmlspecialchars($this->input->post('username', true));
		$pswd = htmlspecialchars($this->input->post('password', true));
	
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		// cek jika usernya ada
        if($user){

			// cek password
			if(password_verify($pswd, $user['password'])){
				// siapkan data untuk disimpan dalam session
				$data = array(
					'username'	=> $user['username'],
					'role'		=> $user['role'],
					'email'		=> $user['email']
				);
				$this->session->set_userdata($data);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Error!</strong> Password salah.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
				redirect('auth');
			}
			
        }else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Error!</strong> Username belum terdaftar.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        	redirect('auth');
       }
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <strong>Sukses!</strong> Berhasil logout.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                              </div>');
        redirect('auth');
	}
	public function blocked()
	{
		$data = array(
			'title'	=> 'Access Blocked!'
		);
		$this->load->view('errors/html/error_403', $data);
	}

}
