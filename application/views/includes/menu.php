<nav class="teal lighten-1" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url()?>" class="brand-logo ">Quiz - Painel de Controle</a>
  <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo base_url('usuarios')?>">Usuarios</a></li>
      <li><a href="<?php echo base_url('Perguntas')?>">Perguntas</a></li>
      <li><a href="<?php echo base_url('login')?>">Sair</a></li>
    </ul>
    <ul id="nav-mobile" class="side-nav">
       <li><a href="<?php echo base_url('usuarios')?>">Usuarios</a></li>
      <li><a href="<?php echo base_url('perguntas')?>">Perguntas</a></li>
      <li><a href="<?php echo base_url('login')?>">Sair</a></li>   
    </ul>
    <a href="home" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>