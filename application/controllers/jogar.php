<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogar extends CI_Controller {


    function __construct(){		
	
	    parent::__construct();
		$this->load->library('session');
		
		if ( ! $this->session->userdata('logado')){
		    redirect('login');
		}
    
    }
    public function index()
	{
		$data = array();
		$data['title'] = 'Editar';
		$this->load->view('includes/header',$data);
		
		$this->load->view('teste');
		
	}
    
}