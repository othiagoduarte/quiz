<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {
	
	function __construct()
	{	
		parent::__construct();
		
		$this->load->model('nivel','nivel');
		$this->load->model('nivel');
		$this->load->model('jogo','jogo');
		$this->load->model('pergunta','pergunta');
		$this->load->model('resposta','resposta');
		$this->load->model('jogo_resposta','jogo_resposta');
		
	}

	public function index()
	{
		echo "teste";
	}
	public function nivel(){
		
		$this->nivel->descricao = "DIFICIL";
		$this->nivel->pontos = 100;
		$this->nivel->insert();
		$this->nivel->last_id();
		var_dump($this->nivel);
		
	}
	
	public function pergunta(){
		
		$this->pergunta->descricao = "Quem descobriu o brasil";
		$this->pergunta->id_resposta = 0;
		$this->pergunta->id_nivel = 1;
		
		$this->pergunta->insert();
		
		$this->pergunta->id = $this->pergunta->last_id();
		
		$resposta_1 = new resposta();
		$resposta_2 = new resposta();
		$resposta_3 = new resposta();
		$resposta_4 = new resposta();
		
		$resposta_1->id_pergunta = $this->pergunta->id;
		$resposta_1->descricao = "Pedro alvares Cabral";
		$resposta_1->Insert();
		
		$resposta_2->id_pergunta = $this->pergunta->id;
		$resposta_2->descricao = "Luis Inacio Lula da Silva";
		$resposta_2->Insert();
		
		$resposta_3->id_pergunta = $this->pergunta->id;
		$resposta_3->descricao = "Zagalo";
		$resposta_3->Insert();
		
		$resposta_4->id_pergunta = $this->pergunta->id;
		$resposta_4->descricao = "Dilma";
		$resposta_4->Insert();
		
	}
	public function resposta(){
		
	}
	public function jogo(){
		
		
	}
	public function jogo_resposta(){
		
	}
}