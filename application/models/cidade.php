<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
class Cidade extends CI_Model {


	
	function GetCidades(){
		
		$lista_cidades = array();
		$novaCidade  = array();
		$novaCidade['id'] = '1';
		$novaCidade['nome'] = 'Porto Alegre';
		$lista_cidades[] = $novaCidade;
	
		$novaCidade  = array();
		$novaCidade['id'] = '2';
		$novaCidade['nome'] = 'Gravatai';
		$lista_cidades[] = $novaCidade;
	
		$novaCidade  = array();
		$novaCidade['id'] = '3';
		$novaCidade['nome'] = 'Alvorada';
		$lista_cidades[] = $novaCidade;
		
		return $lista_cidades;
	}
}