<?php

class Home extends CI_Controller {


    function index() {
        $this->session->unset_userdata('error');
        $this->load->helper('url');
        $this->load->view('header');        
        $this->load->view('menu');
        $this->load->view('index');
        $this->load->view('white_space');
    }

    public function about(){
        $this->session->unset_userdata('error');
        $this->load->helper('url');
        $this->load->view('header');        
        $this->load->view('menu');
        $this->load->view('about');
        $this->load->view('white_space');
    }

    public function how(){
        $this->session->unset_userdata('error');
        $this->load->helper('url');
        $this->load->view('header');        
        $this->load->view('menu');
        $this->load->view('how');
        $this->load->view('white_space');
    }
}

?>