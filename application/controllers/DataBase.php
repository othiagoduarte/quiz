<?php

class DataBase extends CI_Controller {

	public $path = 'files/conf.txt';
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('DadosDataBase');
				
	}

	function index()
	{
		if (isset($_SESSION['logado']))
		{
			$logado = $_SESSION['logado'];
		}
		else
		{
			$logado = FALSE;
		}		
		
		$logado = TRUE; 										#Remover após a solução da sessão
			 
		if ( ! $logado )
		{
			header("Location: /avaliacao/login");
		}	
		$dadosDataBase = new dadosDataBase();
		$dadosArquivo = $this->lerArquivo();

		if (Count($dadosArquivo) > 0) {
			
			$dadosDataBase = json_decode($dadosArquivo[0]);
		}

		$data = array();		
		$data['title'] = 'Dados de acesso';
		$data['dados'] = $dadosDataBase;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('dadosDataBase');
		$this->load->view('includes/footer');
		
	}
	function atualizar(){
		
		$dadosDataBase = array();
		$dadosDataBase = $this->input->post();
		$json = json_encode($dadosDataBase);
		$this->insert($json);
		
		$dadosArquivo = $this->lerArquivo();
		$dadosDataBase = array();
		
		if (Count($dadosArquivo) > 0) {
			
			$dadosDataBase = json_decode($dadosArquivo[0]);
		}

		$data = array();
		$data['title'] = 'Cadastrar';
		$data['mensagemRetorno'] = "Sucesso ao alterar os dados de configuração de acesso ao base de dados";
						
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('includes/retorno');
		$this->load->view('includes/footer');
	}	
	function lerArquivo()
	{
		$linhas = file($this->path);
		
		return $linhas;
	}
	
	function insert($json)
	{	
		$fb = fopen($this->path,'w+');
		fwrite($fb,$json."\r\n");
		fclose($fb);
	}
	
}