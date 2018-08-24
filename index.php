<?php
include_once('config/config.inc.php'); //cargando archivo de configuracion

$uM = load_model('usuario'); //uM userModel
$hM = load_model('html');
$iM = load_model('inputs');
$frm_nombre = '';
$frm_email = '';
$frm_direccion = '';
$frm_cp = '';
$frm_tel = '';
$frm_pregunta = '';
$terminos_condiciones = '';


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
        <div class="contenedor">
            <div id="carouselindicador" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselindicador" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselindicador" data-slide-to="1"></li>
                    <li data-target="#carouselindicador" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://recasens.com/wp-content/uploads/2017/02/r_095_pvc_1.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselindicador" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselindicador" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="contquiensomos">
        <div class="container">
            <div id="quiensomos" class="d-flex flex-column align-items-center">
                <div class="titulo mt-4">
                    <h2>¿Quiénes somos?</h2>
                </div>
                <div class="separadorqs"></div>
                <img src="<?php echo $ruta_inicio; ?>img/home/1.png" alt="" class="img-botella">
                <img src="<?php echo $ruta_inicio; ?>img/home/6.png" alt="" class="img-hoja1">
                <img src="<?php echo $ruta_inicio; ?>img/home/5.png" alt="" class="img-botella2">
                <div class="info bg-white">
                    <div class="contenido">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien a dapibus. Aenean
                            efficitur nisi at fringilla molestie. Nunc varius, ipsum a iaculis interdum, sem dui blandit
                            ligula, vitae egestas arcu tortor finibus lectus.</p>
                        <img src="<?php echo $ruta_inicio; ?>img/home/3.png" alt="" class="img-fruta">
                        <img src="<?php echo $ruta_inicio; ?>img/home/4.png" alt="" class="img-hoja2">
                        <img src="<?php echo $ruta_inicio; ?>img/home/7.png" alt="" class="img-botella3">
                    </div>
                </div>
                <div class="separadorqs"></div>
            </div>
        </div>
        </div>
        <div class="clubysana">
            <div class="info d-flex justify-content-center align-items-center">
                <div class="contenido m-3">
                    <img class="img-ysanaclub img-fluid" src="<?php echo $ruta_inicio; ?>img/ysanaclubbl.png" alt="">
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien a dapibus. Aenean
                        efficitur nisi at fringilla molestie. Nunc varius, ipsum a iaculis interdum, sem dui blandit ligula,
                        vitae egestas arcu tortor finibus lectus.</p> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="novedades text-center">
                <div class="titulo mt-4">
                    <h2>Novedades</h2>
                </div>
                <!-- d-flex flex-row justify-content-center mt-4 -->
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="adelgaysana">
                            <div class="img">
                                <div class="d-none d-sm-block">
                                    <div class="info">
                                        <h1>AdelgaYsana Forte</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien
                                            a dapibus. Aenean efficitur nisi at fringilla molestie.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-none">
                                    <div class="infoxs">
                                        <h1>AdelgaYsana Forte</h1>
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien
                                            a dapibus. Aenean efficitur nisi at fringilla molestie.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="freenose">
                            <div class="img">
                                <div class="d-none d-sm-block">
                                    <div class="info">
                                        <h1>AdelgaYsana Forte</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien
                                            a dapibus. Aenean efficitur nisi at fringilla molestie.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-none">
                                        <div class="infoxs">
                                            <h1>AdelgaYsana Forte</h1>
                                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien
                                                    a dapibus. Aenean efficitur nisi at fringilla molestie.</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container contacto mt-4">
            <div class="d-flex justify-content-end align-items-center position-relative">
                <div class="titulo position-absolute">
                    <h1>Formulario</h1>
                    <h1>Contacto</h1>
                </div>
                <div class="frmcontacto">
                    <form action="#">
                        <?php echo $iM->get_input_text($frm_nombre, $frm_nombre, $class='form-control border-frm-contact', $lbl='', $placeholder='Nombre y Apellidos'); ?>
                        <?php echo $iM->get_input_text($frm_email, $frm_email, $class='form-control border-frm-contact', $lbl='', $placeholder='E-mail'); ?>
                        <?php echo $iM->get_input_text($frm_direccion, $frm_direccion, $class='form-control border-frm-contact', $lbl='', $placeholder='Dirección'); ?>
                        <div class="">
                            <div class="row">
                                <?php echo $iM->get_input_text($frm_cp, $frm_cp, $class='form-control border-frm-contact', $lbl='', $placeholder='CP','',false,false,false,'col-md-6 mb-3'); ?>
                                <?php echo $iM->get_input_text($frm_tel, $frm_tel, $class='form-control border-frm-contact', $lbl='', $placeholder='Telf','',false,false,false,'col-md-6 mb-3'); ?>
                            </div>
                        </div>
                        <?php echo $iM->get_input_textarea($frm_pregunta, $frm_pregunta, $class='form-control border-frm-contact', $lbl='', $placeholder='Tu pregunta'); ?>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere tempor nunc ut rhoncus.
                            Sed eget urna nec nunc pellentesque maximus vitae sed lectus. Sed non volutpat erat. Duis sit
                            amet iaculis massa, sed congue libero. Phasellus hendrerit ut nulla vitae malesuada.</p>
                        <div class="form-check">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <div>
                                        <input class="form-check-input" type="checkbox" name="terminos_condiciones" id="terminos_condiciones" value="option1" required>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Acepto politica de privacidad
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 border-frm-contact btn-color-5">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once('inc/footer.inc.php'); ?>
    </main>
</body>

</html>