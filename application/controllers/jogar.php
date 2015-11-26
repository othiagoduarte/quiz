<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogar extends CI_Controller {


    function __construct(){		
	
	    parent::__construct();
		$this->load->library('session');
		
		if ( ! $this->session->userdata('logado')){
		    redirect('login');
		}
		$this->load->model('pergunta','pergunta');
		$this->load->model('resposta','resposta');
    
    }
    public function index()
	{
		$data = array();
		$data['title'] = 'Editar';
		$data['nome_usuario'] =  $this->session->userdata('usuario');
		var_dump($data['nome_usuario'] );
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu_jogo');
		$this->load->view('jogo_inicar');
		
	}
	
	public function pergunta($id)
	{
		$pergunta = $this->pergunta->get_by_id($id);
		$respostas = $this->resposta->get_respostas_aleatorio($pergunta->id);

		$data = array();
		$data['title'] = 'Quiz';
		$data['pergunta'] = $pergunta;
		$data['respostas'] = $respostas;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu_jogo');
		$this->load->view('jogo_pergunta');
		
	}
    
}