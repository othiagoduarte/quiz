<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
class Usuario extends CI_Model {

	public $id = "";
	public $nome = "";
	public $senha = "";
	public $usuario = "";
	public $email = "";	
	public $rg = "";
	public $cpf = "";
	public $mae ="";
	public $endereco = "";
	public $estado = 0;
	public $cidade = 0;
	public $telefone = ""; 
	public $pai = "";
	public $comentario = "";
  	
	public function __construct(){
	   	parent::__construct();
	   		
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->library('arquivo','arquivo');	
	}
	function GetUsuarios(){
			
		$usuarios = array();
				
		return $usuarios;
	}
	public function lasId()
	{
		return Count($this->GetUsuarios());
	}	    
	public function getbyId($id)	{
		
		$usuarios =  $this->GetUsuarios();
		
		foreach ($usuarios as $usuario) 
		{
			if ($usuario->id == $id ) 
			{
				return $usuario;
			}
		}
		return new Usuario(); 
	}
	public function getbyUsuario($nomeUsuario)	{
		
		$usuarios =  $this->GetUsuarios();
	
		foreach ($usuarios as $usuario) 
		{
			if ($usuario->usuario == $nomeUsuario ) 
			{
				var_dump($usuario);
				return $usuario;
			}
		}
		return new Usuario(); 
	}
		
	public function insert()
	{	
		$this->ConectarDB();
		$this->db->insert('usuarios',$this);		
	}	
	public function update()
	{
		$this->ConectarDB();
		$this->db->update('usuarios', $this, array('id' => $_POST['id']));
	}
	public function delete()
	{
		
	}
	public function BeginTrans(){
		$this->db->trans_start();	
	}
	public function Rollback(){
		$this->db->trans_off();	
	}
	public function commit(){
		$this->db->trans_complete();
	}
	public function ConectarDB(){
		return $this->load->database();
	}
	function logar(){
		
		if (count($this->GetUsuarios()) > 0) {
			$usuario = $this->getbyUsuario($this->usuario);
			return $usuario->usuario == $this->usuario && $usuario->senha == $this->senha;
		}
		else{
			return $this->usuario === 'admin' && $this->senha === 'admin' ;		
		}		
	}
}