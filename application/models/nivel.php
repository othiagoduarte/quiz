<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
class Nivel extends CI_Model {

	public $id = 0;
	public $pontos = 0;
	public $descricao = "";
  	
	public function __construct(){
	   	parent::__construct();	
	}
	
	
	public function get_table(){
		return 'nivel';																			#definir o nome da table onde os dados serão salvos
	}
	
	public function last_id(){
		
		return $this->db->insert_id();	
	}
	
	public function get_all($lmt = 0){
		
		$this->conectarDB();
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
			return new Nivel();
		}				
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