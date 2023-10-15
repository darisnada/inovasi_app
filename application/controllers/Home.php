<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_m');
    }
    public function index()
    {

        $this->data['title'] = 'Home';
        $this->data['content'] = 'home/index';
        $this->data['setting'] = $this->Setting_m->get();
        $this->load->view('component/main-frontend', $this->data);
    }
    public function innovation()
    {

        $this->data['title'] = 'Inovasi';
        $this->data['content'] = 'home/innovation';
        $this->data['setting'] = $this->Setting_m->get();
        $this->load->view('component/main-frontend', $this->data);
    }
}
