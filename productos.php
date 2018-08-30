<?php
include_once('config/config.inc.php'); //cargando archivo de configuracion

$uM = load_model('usuario'); //uM userModel
$hM = load_model('html');
$iM = load_model('inputs');
$frm_buscar = '';
$lista_farmacias = array(
    array('nombre'=>'Dani','calle'=>'C/ cantabria'),
    array('nombre'=>'Dani','calle'=>'C/ cantabria'),
    array('nombre'=>'Dani','calle'=>'C/ cantabria'),
    array('nombre'=>'Dani','calle'=>'C/ cantabria'),
    array('nombre'=>'Dani','calle'=>'C/ cantabria')
);

//GET___________________________________________________________________________

//GET___________________________________________________________________________

//POST__________________________________________________________________________

//POST__________________________________________________________________________

include_once('inc/cabecera.inc.php'); //cargando cabecera
?>
<script type="text/javascript">

</script>

<body>
    <?php include_once('inc/panel_top.inc.php'); ?>
    <?php include_once('inc/navbar_inicio.inc.php'); ?>

    <?php //include_once('inc/footer.inc.php'); ?>
    <main id="content" role="main">
        <div class="container">
            <div class="d-flex flex-column align-items-center my-4">
                <h1 class="h1-mbl">Nuestras categorías</h1>
                <p class="mb-1">Encuentra el producto más adecuado para tí</p>
                <div class="liniacategoria"></div>
            </div>
        </div>
        <div class="container mt-3 mb-5">
            <div id="accordion">
                <div class="card categoria">
                    <div class="card-header" id="acor_head1" data-toggle="collapse" data-target="#acordeon_nutricion" aria-expanded="false" aria-controls="acordeon_nutricion">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus
                            accusamus distinctio accusantium?</p>
                        <h5 class="mb-0">
                            <h1>Nutrición</h1>
                        </h5>
                        <!-- <img class="img-categ" src="img/home/7.png"> -->
                    </div>
                    <div id="acordeon_nutricion" class="collapse" aria-labelledby="acor_head1" data-parent="#accordion">
                        <div class="card-body">
                            <div class="contenedor-productos mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                                            <div class="producto">
                                                <div class="img">
                                                    <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                                </div>
                                                <div class="footer-prod">
                                                    <h5 class="mb-0">AdelgaYsana</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card categoria">
                    <div class="card-header" id="acor_head2" data-toggle="collapse" data-target="#acordeon_sueño" aria-expanded="false" aria-controls="acordeon_sueño">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus
                            accusamus distinctio accusantium?</p>
                        <h5 class="mb-0">
                            <h1>Sueño</h1>
                        </h5>
                        <!-- <img class="img-categ" src="img/home/7.png"> -->
                    </div>
                    <div id="acordeon_sueño" class="collapse" aria-labelledby="acor_head2" data-parent="#accordion">
                        <div class="card-body">
                            <div class="contenedor-productos mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                                            <div class="producto">
                                                <div class="img">
                                                    <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                                </div>
                                                <div class="footer-prod">
                                                    <h5 class="mb-0">AdelgaYsana</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card categoria">
                    <div class="card-header" id="acor_head3" data-toggle="collapse" data-target="#acordeon_ansiedad" aria-expanded="false" aria-controls="acordeon_ansiedad">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus
                            accusamus distinctio accusantium?</p>
                        <h5 class="mb-0">
                            <h1>Ansiedad</h1>
                        </h5>
                        <!-- <img class="img-categ" src="img/home/7.png"> -->
                    </div>
                    <div id="acordeon_ansiedad" class="collapse" aria-labelledby="acor_head3" data-parent="#accordion">
                        <div class="card-body">
                            <div class="contenedor-productos mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                                            <div class="producto">
                                                <div class="img">
                                                    <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                                </div>
                                                <div class="footer-prod">
                                                    <h5 class="mb-0">AdelgaYsana</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card categoria">
                    <div class="card-header" id="acor_head4" data-toggle="collapse" data-target="#acordeon_articulaciones" aria-expanded="false" aria-controls="acordeon_articulaciones">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus
                            accusamus distinctio accusantium?</p>
                        <h5 class="mb-0">
                            <h1>Articulaciones</h1>
                        </h5>
                        <!-- <img class="img-categ" src="img/home/7.png"> -->
                    </div>
                    <div id="acordeon_articulaciones" class="collapse" aria-labelledby="acor_head4" data-parent="#accordion">
                        <div class="card-body">
                            <div class="contenedor-productos mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                                            <div class="producto">
                                                <div class="img">
                                                    <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                                </div>
                                                <div class="footer-prod">
                                                    <h5 class="mb-0">AdelgaYsana</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card categoria">
                    <div class="card-header" id="acor_head5" data-toggle="collapse" data-target="#acordeon_menopausia" aria-expanded="false" aria-controls="acordeon_menopausia">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus
                            accusamus distinctio accusantium?</p>
                        <h5 class="mb-0">
                            <h1>Menopausia</h1>
                        </h5>
                        <!-- <img class="img-categ" src="img/home/7.png"> -->
                    </div>
                    <div id="acordeon_menopausia" class="collapse" aria-labelledby="acor_head5" data-parent="#accordion">
                        <div class="card-body">
                            <div class="contenedor-productos mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                                            <div class="producto">
                                                <div class="img">
                                                    <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                                </div>
                                                <div class="footer-prod">
                                                    <h5 class="mb-0">AdelgaYsana</h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="card categoria">
                    <div class="card-header" id="acord_head2" data-toggle="collapse" data-target="#acordeon_sueño" aria-expanded="false" aria-controls="acordeon_sueño">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus
                            accusamus distinctio accusantium?</p>
                        <h5 class="mb-0">
                            <h1>Sueño</h1>
                        </h5>
                        <img class="img-categ" src="https://vignette.wikia.nocookie.net/futbol/images/9/90/Copa_Mundial_de_F%C3%BAtbol.png/revision/latest?cb=20140617232719">

                    </div>
                    <div id="acordeon_sueño" class="collapse" aria-labelledby="acord_head2" data-parent="#accordion">
                        <div class="card-body">
                            <div class="contenedor-productos mt-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto1.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="producto">
                                            <div class="img">
                                                <img class="img-categ img-fluid" src="<?php echo $ruta_inicio; ?>img/svg/producto2.png">
                                            </div>
                                            <div class="footer-prod">
                                                <h5 class="mb-0">AdelgaYsana</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
        <?php include_once('inc/mapa.inc.php'); ?>
        <?php include_once('inc/footer.inc.php'); ?>
    </main>
</body>

</html>