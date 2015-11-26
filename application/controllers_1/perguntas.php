<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perguntas extends CI_Controller {
	
	function __construct()
	{	
		parent::__construct();
		$this->load->library('session');
		
		if ( ! $this->session->userdata('logado')){
		    redirect('login');
		}
		
		$this->load->model('nivel','nivel');
		$this->load->model('nivel');
		$this->load->model('pergunta','pergunta');
		$this->load->model('resposta','resposta');
		
	}

	public function index()
	{
		$data = array();
		$data['title'] = 'Editar';
		$data['lista_perguntas'] = $this->get_lista_perguntas( $this->pergunta->get_all() );
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('perguntas/listar');
		$this->load->view('includes/footer');	
	}
	
	public function detalhes($id){
			
		$data = $this->carregar_pergunta_respostas($id);
		$data['title'] = 'Detalhes';
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('perguntas/visualizar');
		$this->load->view('includes/footer');	
	}
		
	public function inserir(){
		
		$data = array();
		$data['title'] = 'Inserir';
		$data['lista_nivel'] = $this->nivel->get_all() ;
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('perguntas/inserir');
		$this->load->view('includes/footer');	
		
	} 
		
	public function excluir($id){
			
		$data = $this->carregar_pergunta_respostas($id);
		$data['title'] = 'Excluir';
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('perguntas/excluir');
		$this->load->view('includes/footer');	
	}
	
	public function editar($id){
			
		$data = $this->carregar_pergunta_respostas($id);
		$data['title'] = 'Editar';
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('perguntas/editar');
		$this->load->view('includes/footer');		
	}
			
	public function do_editar(){
		
		#Capturar dados enviados por post
		$pergunta = $this->get_post_pergunta();
		$resposta_1 = $this->get_post_resposta_1();
		$resposta_2 = $this->get_post_resposta_2();
		$resposta_3 = $this->get_post_resposta_3();
		$resposta_4 = $this->get_post_resposta_4();
		
		$pergunta->id_resposta = $resposta_1->id;
		$resposta_1->id_pergunta = $pergunta->id;
		$resposta_2->id_pergunta = $pergunta->id;
		$resposta_3->id_pergunta = $pergunta->id;
		$resposta_4->id_pergunta = $pergunta->id;
		
		$pergunta->update();
		$resposta_1->update();
		$resposta_2->update();
		$resposta_3->update();
		$resposta_4->update();
		
		header("Location: ".base_url('perguntas'))	;
	}
		
	public function do_inserir(){
		
		#Capturar dados enviados por post
		$pergunta = $this->get_post_pergunta();
		$resposta_1 = $this->get_post_resposta_1();
		$resposta_2 = $this->get_post_resposta_2();
		$resposta_3 = $this->get_post_resposta_3();
		$resposta_4 = $this->get_post_resposta_4();
		
		#Gravar pergunta e recuperar Id
		$pergunta->insert();
		$pergunta->id = $this->pergunta->last_id();

		#Atualizar ID da pergunta nas respostas
		$resposta_1->id_pergunta = $pergunta->id;
		$resposta_2->id_pergunta = $pergunta->id;
		$resposta_3->id_pergunta = $pergunta->id;
		$resposta_4->id_pergunta = $pergunta->id;
		
		#Gravar resposta certa
		$resposta_1->Insert();

		#Recuperar id da resposta certa e atualizar pergunta
		$pergunta->id_resposta = $resposta_1->last_id();
		$pergunta->update();
		
		#Gravar demais resposta
		$resposta_2->Insert();
		$resposta_3->Insert();
		$resposta_4->Insert();
		
		header("Location: ".base_url('perguntas'))	;
	}
	
	public function do_excluir(){
		
		#Capturar dados enviados por post
		$pergunta = $this->get_post_pergunta();
		$resposta_1 = $this->get_post_resposta_1();
		$resposta_2 = $this->get_post_resposta_2();
		$resposta_3 = $this->get_post_resposta_3();
		$resposta_4 = $this->get_post_resposta_4();
			
		$resposta_1->delete();
		$resposta_2->delete();
		$resposta_3->delete();
		$resposta_4->delete();
		$pergunta->delete();		
		
		header("Location: ".base_url('perguntas'))	;
	}
	
	public function carregar_pergunta_respostas($id_pergunta){
		
		$pergunta = $this->pergunta->get_by_id($id_pergunta);
		$todas_respostas = $this->resposta->get_respostas_erradas($pergunta->id,$pergunta->id_resposta);
				
		$resposta_1 = $this->resposta->get_by_id($pergunta->id_resposta);
		$resposta_2 = New Resposta();
		$resposta_3 = New Resposta();
		$resposta_4 = New Resposta();
		
		if(count($todas_respostas) == 3 ){
			$resposta_2 = $todas_respostas[0];
			$resposta_3 = $todas_respostas[1];
			$resposta_4 = $todas_respostas[2];
		}
		
		$data = array();
		$data['title'] = '';
		$data['lista_nivel'] = $this->nivel->get_all() ;
		$data['detalhe_resposta1'] = $resposta_1;
		$data['detalhe_resposta2'] = $resposta_2;
		$data['detalhe_resposta3'] = $resposta_3;
		$data['detalhe_resposta4'] = $resposta_4;
		$data['detalhe_pergunta'] = $pergunta;
		return $data;	
	}
	private function get_lista_perguntas($lista){
		
		$lista_perguntas = array();
		
		foreach ($lista as $item) {
			
			$array_pergunta = array();
			$array_pergunta['id'] = $item->id;
			$array_pergunta['nivel'] = $this->traduz_nivel($item->id_nivel);
			$array_pergunta['assunto'] = $item->assunto;
			$array_pergunta['trecho'] = substr($item->descricao,0,30)."...";
			
			$lista_perguntas[] = $array_pergunta;
		}
		return $lista_perguntas;
	}
	
	private function traduz_nivel($id_nivel){
		$nivel = $this->nivel->get_by_id($id_nivel); 
		return $nivel->descricao ;
	}
	
	private function get_post_pergunta(){
	
		$model =  new Pergunta();
		$model->id = $this->input->post('id');
		$model->descricao = $this->input->post('pergunta');
		$model->id_nivel = $this->input->post('nivel');
		$model->assunto = $this->input->post('assunto');
		return $model;
	}
	
	private function get_post_resposta_1()	{
	
		$model =  new Resposta();
		$model->id = $this->input->post('id_resposta1');
		$model->descricao = $this->input->post('resposta1');
		return $model;
	}
	
	private function get_post_resposta_2()	{
	
		$model =  new Resposta();
		$model->id = $this->input->post('id_resposta2');
		$model->descricao = $this->input->post('resposta2');
		return $model;
	}
	
	private function get_post_resposta_3()	{
	
		$model =  new Resposta();
		$model->id = $this->input->post('id_resposta3');
		$model->descricao = $this->input->post('resposta3');
		return $model;
	}
	
	private function get_post_resposta_4()	{
	
		$model =  new Resposta();
		$model->id = $this->input->post('id_resposta4');
		$model->descricao = $this->input->post('resposta4');
		return $model;
	}
}