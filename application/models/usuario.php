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
	}
	
	public function logar(){
		
		$this->conectarDB();
	
		if ($this->db->count_all_results($this->get_table()) > 0) {
			
			$usuario = $this->get_by_usuario($this->usuario);
		    $this->id = $usuario->id;
		    $this->nome = $usuario->nome;
		    
			return $usuario->usuario == $this->usuario && $usuario->senha == $this->senha;
		}
		else{
		    
			return $this->usuario === 'admin' && $this->senha === 'admin' ;		
		}	
	}
	public function get_table(){
		return "usuarios";																			
	}
	
	public function get_all($lmt = 0){
		
		$this->conectarDB();	
		$this->db->order_by('nome','asc'); 
		
		if ($lmt > 0) {
			$this->db->limit($lmt);
		}	
		
		return $this->db->get($this->get_table())->result();
	} 
	   
	public function get_by_id($id)	{
		
		$this->conectarDB();
		$result = $this->db->get_where( $this->get_table() , array('id' => $id) )->result();
		
		if (count($result) > 0 ) {
			return $result[0];
		}else {
			return new Usuario();
		}				
	}
	
	public function get_by_usuario($nomeUsuario)	{
		
		$usuarios =  $this->get_all();
	
		foreach ($usuarios as $usuario) 
		{
			if ($usuario->usuario == $nomeUsuario ) 
			{				
				return $usuario;
			}
		}
		return new Usuario(); 
	}
		
	public function insert(){	
		$this->conectarDB();
		$this->db->insert($this->get_table(),$this);		
	}	
	
	public function update(){
		$this->conectarDB();
		$this->db->update($this->get_table(), $this, array('id' => $this->id ) );
	}
	
	public function delete(){		
		$this->conectarDB();
		$this->db->delete($this->get_table(), array('id' => $this->id)); 
	}
	
	public function beginTrans(){
		$this->db->trans_start();	
	}
	
	public function rollback(){
		$this->db->trans_off();	
	}
	
	public function commit(){
		$this->db->trans_complete();
	}
	
	public function conectarDB(){
		return $this->load->database();
	}	
}