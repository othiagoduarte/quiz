<div class="container-fluid conteudo">
  <div class="row s12">
    <div class="row">
      <br>
      <div class="center">
        <b>  <?php echo isset($mensagem)?$mensagem:"Excluir usuário"; ?> <b>
      </div>
    <form class="col s12" action="<?php echo base_url('usuarios/do_excluir')?>" method="POST" >
      <?php include "detalhe.php"?>
        <div class="input-field col s3">
          <button class="btn waves-effect waves-light purple" type="submit" >Excluir
            <i class="material-icons right"></i>
          </button>
           <a class="btn waves-effect waves-light purple" href="<?php echo base_url('usuarios')?>">Cancelar
              <i class="material-icons"></i>
           </a>
          </div>
       </div>
    </form>
  </div>
</div>