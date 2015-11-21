<nav class="black lighten-1" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo ">Sistema de gerenciamento</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo base_url('usuarios')?>">Lista de usuario</a></li>
      <li><a href="<?php echo base_url('DataBase')?>">Data Base</a></li>
      <li><a href="<?php echo base_url('files/usuarios.txt')?>">usuarios.txt</a></li>
      <li><a href="<?php echo base_url('files/conf.txt')?>">Conf.txt</a></li>
      
    </ul>
    <ul id="nav-mobile" class="side-nav">
      <li><a href="<?php echo base_url('usuarios')?>">Lista de usuario</a></li>
      <li><a href="<?php echo base_url('DataBase')?>">Data Base</a></li>  
      <li><a href="<?php echo base_url('files/usuarios.txt')?>">usuarios.txt</a></li>
      <li><a href="<?php echo base_url('files/conf.txt')?>">Conf.txt</a></li>    
    </ul>
    <a href="home" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>