<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cekLogin();
		$this->load->model('Setting_m');
		$this->load->model('InnovationField_m');
	}
	public function index()
	{

		$this->data['title'] = 'Dashboard';
		$this->data['content'] = 'dashboard/index';
		$this->data['user'] = infoLogin();
		$this->data['setting'] = $this->Setting_m->get();
		$this->data['innovationField'] = $this->InnovationField_m->get();
		$this->data['innovations'] = $this->db->query("SELECT a.*, b.name as innovation_field_name FROM innovations a, innovation_fields b WHERE a.innovation_field_id=b.id GROUP BY id DESC LIMIT 10;")->result();
		$this->data['total_innovations'] = $this->db->query("SELECT count(id) as total FROM innovations")->row();
		$this->data['total_admin'] = $this->db->query("SELECT count(id) as total FROM users WHERE role='ADMIN'")->row();
		$this->data['total_karyawan'] = $this->db->query("SELECT count(id) as total FROM users WHERE role='KARYAWAN'")->row();
		$this->data['total_asn'] = $this->db->query("SELECT count(id) as total FROM users WHERE role='ASN'")->row();
		$this->load->view('component/main-backend', $this->data);
	}
}
