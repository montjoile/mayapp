<?php

class Calculadora extends CI_Controller {


    function convertir(){

    	$this->load->helper('url');
        $this->session->unset_userdata('error');
        $numero=$this->input->post('numero');


        if ($numero==NULL){
            redirect('home', 'index');        
        }
        else{
            $this->load->model('calcular_model');
            $data['resultado']=$this->calcular_model->convertir($numero);

            $this->load->helper('url');
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('index');
            $this->load->view('calc', $data);
        }
    }
}    

?>
