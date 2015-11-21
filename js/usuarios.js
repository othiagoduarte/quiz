$(document).ready(function()
{
	selecionar();
	modalCadastro();
	
});
//Functions usadas pelo Materizlized
function selecionar(){

    $('select').material_select();

}

function modalCadastro(){

	var btnModal=$('#btnCadastrar');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#cadastrarUsuario');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});
}
//Funções Ajax

function cadastrarUsuario(){
	
	var btnCadastrar = $('#cadastrar');
	$btnCadastrar.unbind('click');
	var servico = "http://localhost:8080/avaliacao/";
	$get(servico,function(){
		alert($Data);
	});
}