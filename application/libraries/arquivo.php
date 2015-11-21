<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class arquivo
{
	public $path = "";
	
	public function __construct()
    {
       $this->path = 'files/usuarios.txt';
    }
	function lerArquivo()
	{
		$linhas = file($this->path);
		return $linhas;
	}
	
	function insert($json)
	{	
		$fb = fopen($this->path,'a+');
		fwrite($fb,$json."\r\n");
		fclose($fb);
	}
	function update($arrayJson)
	{	
		$fb = fopen($this->path,'w+');
		
		foreach ($arrayJson as $json) {
			fwrite($fb,$json."\r\n");
		}		
		
		fclose($fb);
	}	
}