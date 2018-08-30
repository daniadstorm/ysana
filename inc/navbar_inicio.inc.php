<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div id="navbar_inicio">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light px-0">
            <a class="navbar-brand" href="<?php echo $ruta_inicio; ?>">
                <img src="<?php echo $ruta_inicio; ?>img/svg/ysanacolor.svg" height="44px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-auto ml-3" id="navbarSupportedContent">
                <!-- <form id="frmbuscar" class="form-inline mt-2 my-lg-0 ml-auto mr-4">
                    <input class="form-control mr-sm-2" type="search" placeholder="Busca tu producto" aria-label="Busca tu producto">
                    <img name="search" src="https://png.icons8.com/ios/64/000000/search.png">
                </form> -->
                <ul id="nav_inicio" class="navbar-nav ml-auto">
                    <li class="nav-item text-right">
                        <form id="frmbuscar" class="form-inline-block mt-2 my-lg-0 ml-auto">
                            <input class="form-control mr-sm-2" type="search" placeholder="Busca tu producto" aria-label="Busca tu producto">
                            <img name="search" src="https://png.icons8.com/ios/64/000000/search.png">
                        </form>
                    </li>
                    <li class="nav-item <?php echo ($activePage == 'productos') ? 'active':''; ?> text-right">
                        <a class="nav-link" href="<?php echo $ruta_inicio; ?>productos.php">Productos</a>
                    </li>
                    <li class="nav-item text-right">
                        <a class="nav-link" href="<?php echo $ruta_inicio; ?>experiencia/index.php">Experiencias</a>
                    </li>
                    <li class="nav-item <?php echo ($activePage=='') ? 'active':''; ?> text-right">
                        <a class="nav-link" href="#">Directo Farmacia</a>
                    </li>
                    <li class="nav-item text-right">
                        <a class="nav-link pt-0 mt-0" href="#">
                            <img src="<?php echo $ruta_inicio; ?>img/svg/clubysana.svg" height="32px" alt="">
                        </a>
                    </li>
                    <li class="nav-item <?php echo ($activePage=='') ? 'active':''; ?> text-right">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item d-block d-sm-none text-right">
                        <p class="m-0 bienvenidosx">Bienvenido a Ysana Vida Sana</p>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>