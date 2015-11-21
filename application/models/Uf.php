<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
class Uf extends CI_Model {


	
	function GetUfs(){
		
		$lista_estados = array();
		$novoEstado  = array();
		$novoEstado['id'] = '1';
		$novoEstado['nome'] = 'Rio Grande do Sul';
		$lista_Estados[] = $novoEstado;
	
		return $lista_Estados;
	}
}