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
		$data['title'] = 'Quiz - Jogar';
		$data['nome_usuario'] =  $this->session->userdata('usuario');
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu_jogo');
		$this->load->view('jogo_iniciar');
		$this->load->view('includes/footer');
	}
	
	public function pergunta($id)
	{
		$jogos_respostas = $this->resposta->db->get('jogos_resposta').result();
		var_dump($jogos_respostas);
		
		$pergunta = $this->pergunta->get_by_id($id);
		$respostas = $this->resposta->get_respostas_aleatorio($pergunta->id);

		$data = array();
		$data['title'] = 'Quiz - Jogar';
		$data['pergunta'] = $pergunta;
		$data['respostas'] = $respostas;
		$data['sequencia'] = $id;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu_jogo');
		$this->load->view('jogo_pergunta');
		$this->load->view('includes/footer');
		
	}
	public function responder(){
	    
	   // var_dump($this->input->post());
	    
	}
    
}