<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogar extends CI_Controller {

    private $usuario_logado;
    
    function __construct(){		
	
	    parent::__construct();
		$this->load->library('session');
		
		$this->load->model('usuario');
		$this->load->model('jogo','jogo');
		$this->load->model('pergunta');
		$this->load->model('resposta');
		$this->load->model('jogo_pergunta','jogo_pergunta');
		
		if ( ! $this->session->userdata('logado')){
		    redirect('login');
		}
		
		$this->usuario_logado = $this->session->userdata('usuario_logado');
		
	
		
    
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
	
	public function pergunta($seq)
	{
	    $query = $this->jogo_pergunta->get_reposta_sequencia(2 ,$seq);
		
		$pergunta = $this->pergunta->get_by_id($query->id_pergunta);
		$respostas = $this->resposta->get_respostas_aleatorio($query->id_pergunta);
	
        $data = array();
		$data['title'] = 'Quiz - Jogar';
		$data['jogo'] = $this->jogo;
		$data['sequencia'] = $seq;
		$data['pergunta'] = $pergunta;
		$data['respostas'] = $respostas;
		$data['resposta_selecionada'] = -1;//$pergunta_sequencia->id_resposta;
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu_jogo');
		$this->load->view('jogo_pergunta');
		$this->load->view('includes/footer');
		
	}
	public function responder(){

	  $proxima_sequencia = $this->input->post('id_sequencia');
	  $proxima_sequencia = $proxima_sequencia + 1; 
	  redirect('jogar/pergunta/'.$proxima_sequencia); 
	
	    
	}
    
}