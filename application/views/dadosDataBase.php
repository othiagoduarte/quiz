<?php 
	if ( ! isset($dados))
	{
		$dados = new DadosDataBase();
	}
?>.

<div class="container-fluid conteudo">
	<div class="center">	
		<form class="col s12" action="<?php echo base_url('DataBase/atualizar')?>" method="POST" >
			<div class="row col s6">
				<h5>Dados de acesso ao Banco de dados</h5>
				<div class="row">
					<div class="input-field col s4">
						<input  id="fone" type="text" class="validate" name="servidor" value="<?php echo $dados->servidor ?>" >
						<label >Servidor</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<input  id="fone" type="text" class="validate" name="usuario"  value="<?php echo $dados->usuario ?>"  >
						<label >Usuario</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<input  id="fone" type="text" class="validate" name="senha"  value="<?php echo $dados->senha ?>" >
						<label >senha</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<input  id="fone" type="text" class="validate" name="dataBase"  value="<?php echo $dados->dataBase ?>" >
						<label >Data Base</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s2">
						<button class="btn waves-effect waves-light " type="submit" >Salvar
							<i class="material-icons right"></i>
						</button>
					</div>	
				</div>			
			</div>
		</form>	
	</div>
</div>