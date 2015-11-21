<?php  
if(! isset($usuario)){
  $usuario = new Usuario(); 
}
?>
<h5>Dados de acesso</h5>
<div class="row">
  <div class="input-field col s4">
    <input  id="fone" type="hidden" class="validate" name="id" value = "<?php echo $usuario->id ?>"  >
    <input  id="fone" type="text" class="validate" name="usuario" value = "<?php echo  $usuario->usuario ?>" required >
    <label >Nome do Usuario</label>
  </div>
  <div class="input-field col s4">
    <input  id="fone" type="password" class="validate" name="senha" value = "<?php echo $usuario->senha ?>" required >
    <label >senha</label>
  </div>
  <div class="input-field col s4">
    <input  id="fone" type="password" class="validate" name="confirmacaoSenha" value = "<?php echo $usuario->senha ?>" required >
    <label >confirmação da senha</label>
  </div>
</div>
<h5>Dados de cadastro</h5>
<div class="row">
  <div class="input-field col s6">
    <input  id="Nome" type="text" class="validate" name="nome" value = "<?php echo $usuario->nome ?>" required >
    <label >Nome completo</label>
  </div>
  <div class="input-field col s3">
    <input id="email" type="email" class="validate" name="email" value = "<?php echo $usuario->email ?>" required >
    <label for="email">Email</label>
  </div>
  <div class="input-field col s3">
    <input  id="fone" type="text" class="validate" name="telefone" value = "<?php echo $usuario->telefone ?>"  >
    <label >Fone</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s3">
    <input  id="rg" type="text" class="validate" name="rg" value = "<?php echo $usuario->rg ?>" required >
    <label >RG</label>
  </div>
    <div class="input-field col s3">
    <input  id="CPF" type="text" class="validate" name="cpf" value = "<?php echo $usuario->cpf ?>" required >
    <label >CPF</label>
  </div>
  <div class="input-field col s3">
    <input  id="mae" type="text" class="validate" name="mae" value = "<?php echo $usuario->mae ?>" required >
    <label >Mae</label>
  </div>
  <div class="input-field col s3">
    <input id="pai" type="text" class="validate" name="pai" value = "<?php echo $usuario->pai ?>">
    <label for="pai">Pai</label>
  </div>
</div>
<div class="row">
  <div class="input-field col s6">
    <input  id="endereco" type="text" class="validate" name="endereco" value = "<?php echo $usuario->endereco ?>" required >
    <label >Endereço</label>
  </div>
  <div class="col s3 ">
    <label>Cidade</label>
          <select class="browser-default" name="cidade"> 
            <option value="0" disabled <?php echo ( 0 == $usuario->cidade) ? "selected" : "" ;  ?> >Selecione</option>
              <?php foreach ($lista_cidades as $cidade) : ?>
                <option value= "<?php  echo  	$cidade['id'] ?>";  
                 <?php echo ($cidade['id'] == $usuario->cidade) ? "selected" : "" ;  ?> > 
                <?php  echo 	$cidade['nome'];; ?></option>
              <?php endforeach; ?>								  
            </select>				    		
    </div>
      <div class="col s3 ">
      <label>Estado</label>
          <select class="browser-default" name="estado"> 
            <option value="0" disabled <?php echo ( 0 == $usuario->cidade) ? "selected" : "" ; ?> >Selecione</option>
              <?php foreach ($lista_Estados as $estado) : ?>
                <option value= <?php  echo  	$estado['id']?>; 
                   <?php echo ($cidade['id'] == $usuario->cidade) ? "selected" : "" ; ?> > 
                <?php  echo 	$estado['nome'];; ?></option>
              <?php endforeach; ?>								  
            </select>				    		
    </div> 
</div>
<div class="row ">
  <div class="input-field col s9">
    <input  id="comentarios" type="text" class="validate" name="comentario" value = "<?php echo $usuario->comentario ?>" >
    <label >Comentarios</label>
  </div>