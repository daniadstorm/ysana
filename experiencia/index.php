<?php
include_once('../config/config.inc.php'); //cargando archivo de configuracion

$uM = load_model('usuario');
$aM = load_model('articulos');
$iM = load_model('inputs');

$id_usuario = '';

//GET__________________________________________________________________________
(isset($_GET['id_articulo'])) ? $id_articulo=$_GET['id_articulo'] : '';

//GET__________________________________________________________________________

//LISTADO______________________________________________________________________

//LISTADO______________________________________________________________________
include_once('../inc/cabecera.inc.php'); //cargando cabecera 
?>
<script type="text/javascript">
</script>

<body>
    <?php include_once('../inc/franja_top.inc.php'); ?>
    <?php include_once('../inc/main_menu.inc.php'); ?>
    <div class="container-fluid">
        <nav>
            <ol class="breadcrumb bg-white ml-5">
                <li class="breadcrumb-item">
                    <a href="#">Ysana</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Experiencia</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="familias mt-3">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link" href="#">NUTRICIÓN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ARTICULACIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SUEÑO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MENOPAUSIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ANSIEDAD</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row articulos">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">Eficaps</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">Eficaps</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">Eficaps</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">Eficaps</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">AdelgaYSana</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">Eficaps</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">Eficaps</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 article-block">
                <article class="tarjeta-articulo">
                    <div class="tarjeta-articulo_elementos-basicos">
                        <div class="tarjeta-articulo_foto">
                            <img src="https://ysana.es/img/04-adelgaysana.png" alt="" class="img-fluid">
                        </div>
                        <div class="tarjeta-articulo_adicional d-flex flex-column">
                            <header class="tarjeta-articulo_info">
                                <h3 class="categoria">Ysana</h3>
                                <h3 class="nombre">Eficaps</h3>
                                <h3 class="precio">19,90€</h3>
                            </header>
                            <header class="tarjeta-articulo_extras">
                                <div class="puntuacion">
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star-color.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                    <?php echo '<img class="img-start" src="'.$ruta_archivos.'img/star.png">'; ?>
                                </div>
                                <div class="boton">
                                    <button type="button" class="btn btn-comprar btn-sm">COMPRAR</button>
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <div class="container-fluid footer2">
        <div class="row">
            <div class="col-6 col-md-3 d-flex flex-column align-items-center">
                <div class="d-flex flex-column align-items-center">
                    <img class="img-footer2" src="https://png.icons8.com/cotton/64/e74c3c/business-management.png">
                    <label>Sin gastos de envio</label>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex flex-column align-items-center">
                <div class="d-flex flex-column align-items-center">
                    <img class="img-footer2" src="https://png.icons8.com/cotton/64/e74c3c/business-management.png">
                    <label>Sin gastos de envio</label>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex flex-column align-items-center">
                <div class="d-flex flex-column align-items-center">
                    <img class="img-footer2" src="https://png.icons8.com/cotton/64/e74c3c/business-management.png">
                    <label>Sin gastos de envio</label>
                </div>
            </div>
            <div class="col-6 col-md-3 d-flex flex-column align-items-center">
                <div class="d-flex flex-column align-items-center">
                    <img class="img-footer2" src="https://png.icons8.com/cotton/64/e74c3c/business-management.png">
                    <label>Sin gastos de envio</label>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('../inc/footer.inc.php'); ?>
</body>

</html>