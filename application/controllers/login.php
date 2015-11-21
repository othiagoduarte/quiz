<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct()
	{	
		parent::__construct();
		$this->load->model('Usuario','usuario');
	}
	
	function index()
	{	
		session_start();
		
		$data = array();
		$data['title'] = 'Login';	
		$this->load->view('includes/header',$data);
		$this->load->view('login');	
		
	}
	function logar()
	{		
		$this->usuario->usuario = $this->input->post('usuario');
		$this->usuario->senha = $this->input->post('senha');

		if ($this->usuario->logar()) {
			$_SESSION['logado'] ==TRUE;
			header("Location: ".base_url())	;
		}else {
			header("Location: ".base_url('login?err'))	;
		}
			
	}
}