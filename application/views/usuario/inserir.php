<div class="container-fluid conteudo">
  <div class="row s12">
    <form class="col s12" action="<?php echo base_url('usuarios/do_cadastrar')?>" method="POST" >
      <?php include "detalhe.php"?>
        <div class="input-field col s2">
          <button class="btn waves-effect waves-light purple " id="cadastrar" type="submit" >Cadastrar
            <i class="material-icons right"></i>
          </button>
         </div>
       </div>
    </form>
  </div>
</div>