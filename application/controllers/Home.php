<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->data['title'] = 'Home';
        $this->data['content'] = 'home/index';
        $this->load->view('component/main-frontend', $this->data);
    }
}
