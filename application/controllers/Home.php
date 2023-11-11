<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Setting_m');
        $this->load->model('Innovation_m');
        $this->load->model('InnovationField_m');
        $this->load->model('Slider_m');
        $this->load->model('News_m');
        $this->load->model('Video_m');
    }
    public function index()
    {

        $this->data['title'] = 'Home';
        $this->data['content'] = 'home/index';
        $this->data['setting'] = $this->Setting_m->get();
        $this->data['innovationField'] = $this->InnovationField_m->get();
        $this->data['sliderField'] = $this->Slider_m->getForHome();
        $this->data['newsField'] = $this->News_m->getForHome();
        $this->data['videoField'] = $this->Video_m->getForHome();
        $this->load->view('component/main-frontend', $this->data);
    }
    public function innovation($a = '')
    {
        $typeInno = $this->input->get('typeInno');
        if($typeInno == 1){

            $config['base_url'] = base_url('home/innovation?typeInno=1');
            $config['per_page'] = 6;

            // Set up pagination
            $this->load->library('pagination');
            $this->pagination->initialize($config);

            // Get the current page from the URL query parameter
            $page = $this->input->get('page') ? $this->input->get('page') : 1;

            // Calculate the offset
            $offset = ($page - 1) * $config['per_page'];

            $this->data['title'] = 'Inovasi';
            $this->data['content'] = 'home/innovation';
            $this->data['setting'] = $this->Setting_m->get();

            // Get data from the model with pagination
            $this->data['innovationField'] = $this->InnovationField_m->get();
            $this->data['data'] = $this->Innovation_m->getDataLimit($config['per_page'], $offset);
        
            $this->data['link_paginate'] = $this->pagination->create_links();

            // Load the view
            $this->load->view('component/main-frontend', $this->data);
        }else {
            $this->data['title'] = 'Inovasi';
            $this->data['content'] = 'home/innovation';
            $this->data['setting'] = $this->Setting_m->get();
            $this->data['data'] = $this->Innovation_m->get();
            $this->data['innovationField'] = $this->InnovationField_m->get();
            $this->load->view('component/main-frontend', $this->data);
        }
    }

    public function innovationP()
{
    $this->load->library('pagination');

    // Pagination configuration
    $config = array();
    $config['base_url'] = base_url('innovationP?category=MASYARAKAT&typeInno=1&page='); // Change the URL as needed
    $config['total_rows'] = $this->Innovation_m->countAll(); // Implement this method in your model
    $config['per_page'] = 6;

    // Initialize pagination
    $this->pagination->initialize($config);
    // $this->data['link_paginate'] = $this->pagination->create_links();
    $this->data['total_page'] = round($this->Innovation_m->countAll() / 6);
    // var_dump($this->data['total_page']); die;

    // Get the current page from the URL query parameter
    $page = $this->input->get('page') ? $this->input->get('page') : 1;

    // Calculate the offset
    $offset = ($page - 1) * $config['per_page'];

    $this->data['title'] = 'Inovasi';
    $this->data['content'] = 'home/innovation';
    $this->data['setting'] = $this->Setting_m->get();

    // Get data from the model with pagination
    // $this->data['data'] = $this->Innovation_m->get();
    $this->data['innovationField'] = $this->InnovationField_m->get();
    $this->data['data'] = $this->Innovation_m->getPaginate($config['per_page'], $offset);

    // Load the view
    $this->load->view('component/main-frontend', $this->data);
}

    public function profile()
    {
        $this->data['title'] = 'Profil';
        $this->data['content'] = 'home/profile';
        $this->data['setting'] = $this->Setting_m->get();
        $this->load->view('component/main-frontend', $this->data);
    }
    public function contact()
    {
        $this->data['title'] = 'Kontak';
        $this->data['content'] = 'home/contact';
        $this->data['setting'] = $this->Setting_m->get();
        $this->load->view('component/main-frontend', $this->data);
    }
}
