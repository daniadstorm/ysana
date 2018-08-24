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
        <div class="container-fluid">
            <nav>
                <ol class="breadcrumb bg-white ml-5">
                    <li class="breadcrumb-item">
                        <a href="#">Ysana</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Producto</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ficha producto</li>
                </ol>
            </nav>
        </div>
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
        <div class="container">
            <p>Aqui va un menu o algo:)</p>
            <h1>Y aqui el texto o algo :)))</h1>
        </div>
        <div class="container">
            <div class="d-flex flex-column align-items-center mt-2">
                <h1>Elige el tuyo</h1>
                <p class="mb-1">Puedes elegir entre nuestro pack o escoger recibirlo en tu farmacia más cercana</p>
                <div class="liniacategoria"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center p-5">
                        <img src="https://images.vexels.com/media/users/3/127125/isolated/preview/5f33b9a2460731d6b3efd7ed80e5f9a7-icono-de-pelota-de-playa-by-vexels.png"
                            alt="" class="img-fluid">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt culpa enim, commodi perspiciatis
                            labore qui cumque soluta id, ducimus, explicabo eveniet omnis ab dolorem earum reiciendis deleniti
                            itaque recusandae beatae!</p>
                        <button type="button" class="btn btn-comprar btn-sm">EXPERIENCIA</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center p-5">
                        <img src="https://images.vexels.com/media/users/3/127125/isolated/preview/5f33b9a2460731d6b3efd7ed80e5f9a7-icono-de-pelota-de-playa-by-vexels.png"
                            alt="" class="img-fluid">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt culpa enim, commodi perspiciatis
                            labore qui cumque soluta id, ducimus, explicabo eveniet omnis ab dolorem earum reiciendis deleniti
                            itaque recusandae beatae!</p>
                        <button type="button" class="btn btn-comprar btn-sm">FARMACIA DIRECTA</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('inc/mapa.inc.php'); ?>
        <div class="container my-5">
            <div class="d-flex flex-column align-items-center mt-2">
                <h1>También te puede interesar</h1>
                <p class="mb-1">Productos relacionados con tu busqueda</p>
                <div class="liniacategoria"></div>
            </div>
            <div class="row mt-5">
                <div class="col-6 col-md-3">
                    <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                        <div class="producto">
                            <div class="img">
                                <img class="img-categ img-fluid" src="https://images.vexels.com/media/users/3/127125/isolated/preview/5f33b9a2460731d6b3efd7ed80e5f9a7-icono-de-pelota-de-playa-by-vexels.png">
                            </div>
                            <div class="footer-prod">
                                <h5 class="mb-0">AdelgaYsana</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                        <div class="producto">
                            <div class="img">
                                <img class="img-categ img-fluid" src="https://images.vexels.com/media/users/3/127125/isolated/preview/5f33b9a2460731d6b3efd7ed80e5f9a7-icono-de-pelota-de-playa-by-vexels.png">
                            </div>
                            <div class="footer-prod">
                                <h5 class="mb-0">AdelgaYsana</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                        <div class="producto">
                            <div class="img">
                                <img class="img-categ img-fluid" src="https://images.vexels.com/media/users/3/127125/isolated/preview/5f33b9a2460731d6b3efd7ed80e5f9a7-icono-de-pelota-de-playa-by-vexels.png">
                            </div>
                            <div class="footer-prod">
                                <h5 class="mb-0">AdelgaYsana</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="<?php echo $ruta_inicio; ?>ficha-producto.php?id_producto=1">
                        <div class="producto">
                            <div class="img">
                                <img class="img-categ img-fluid" src="https://images.vexels.com/media/users/3/127125/isolated/preview/5f33b9a2460731d6b3efd7ed80e5f9a7-icono-de-pelota-de-playa-by-vexels.png">
                            </div>
                            <div class="footer-prod">
                                <h5 class="mb-0">AdelgaYsana</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <?php include_once('inc/footer.inc.php'); ?>
    </main>
</body>

</html>