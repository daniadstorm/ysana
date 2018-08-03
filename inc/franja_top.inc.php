<?php
$html_mmnu = '';
$arr_mmnu = array(
    1 => array('txt'=>'Prueba 1', 'url'=>'#'),
    2 => array('txt'=>'Prueba 2', 'url'=>'#')
);

foreach ($arr_mmnu as $k => $v) {
    //<li class="nav-item active">
      //<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    //</li>
    
    //<li class="nav-item">
      //<a class="nav-link" href="#">Link</a>
    //</li>
    
    $html_mmnu .= '<li class="nav-item">';
    $html_mmnu .=   '<a class="nav-link" href="'.$v['url'].'">'.$v['txt'].'</a>';
    $html_mmnu .= '</li>';
}

//POST__________________________________________________________________________
//POST__________________________________________________________________________

//ACCIONES______________________________________________________________________
if (isset($_SESSION['id_tipo_usuario']) && $_SESSION['id_tipo_usuario'] <= USER) { //seguridad;
    
} else {
    
}
//ACCIONES______________________________________________________________________

?>
<header>
  <div class="navbar p-1 navbar-light bg-blue-ysana sticky-top">
    <div class="navbar-brand">
      <button class="btn bg-transparent border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
        <img src="<?php echo $ruta_archivos; ?>img/mnu-principal.png" width="34" />
      </button>
      <a class="text-light" href="<?php echo $ruta_inicio; ?>">Ysana</a>
    </div>
    <div class="d-flex align-items-center">
      <?php
            if(!isset($_SESSION['id_tipo_usuario'])){?>
      <a href="<?php $ruta_archivos?>new-account.php" class="text-light pb-1">Inicio Sesión</a>
      <label class="ml-1 mr-1 text-light">|</label>
      <a href="<?php $ruta_archivos?>new-account.php" class="text-light pb-1">Crear cuenta</a>
      <?php } ?>
    </div>
    <div class="navbar-collapse collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <?php echo $html_mmnu; ?>
      </ul>
    </div>
  </div>
</header>