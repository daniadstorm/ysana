<?php
if (!isset($lng)) $lng = array();
//franjaTop_________________________________________________________________________________________
$lng['ttl_idioma'] = 'Idioma';
//franjaTop_________________________________________________________________________________________

//panel_top_________________________________________________________________________________________
$lng['panel_top'][0] = 'Bienvenido a Ysana Vida Sana';
$lng['panel_top'][1] = 'Identifícate';
$lng['panel_top'][2] = 'Crear';
//panel_top_________________________________________________________________________________________

//navbar_inicio_____________________________________________________________________________________
$lng['navbar_inicio'][0] = 'Productos';
$lng['navbar_inicio'][1] = 'Comprar experiencias';
$lng['navbar_inicio'][2] = 'Directo a Farmacia';
$lng['navbar_inicio'][3] = 'Contacto';
$lng['navbar_inicio'][4] = 'Bienvenido a Ysana Vida Sana';
//navbar_inicio_____________________________________________________________________________________

//index.php_____________________________________________________________________________________
$lng['index'][0] = '¿Quiénes somos?';
$lng['index'][1] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien a dapibus. Aenean efficitur nisi at fringilla molestie.';
$lng['index'][2] = 'Novedades';
$lng['index'][3] = 'AdelgaYsana Forte';
$lng['index'][4] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien a dapibus. Aenean efficitur nisi at fringilla molestie.';
$lng['index'][5] = 'AdelgaYsana Forte';
$lng['index'][6] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis id sapien a dapibus. Aenean efficitur nisi at fringilla molestie.';
$lng['index'][7] = 'Contacta';
$lng['index'][8] = 'con Ysana';
$lng['index'][9] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum posuere tempor nunc ut rhoncus. Sed eget urna nec nunc pellentesque maximus vitae sed lectus. Sed non volutpat erat. Duis sit amet iaculis massa, sed congue libero. Phasellus hendrerit ut nulla vitae malesuada.';
$lng['index'][10] = 'Acepto politica de privacidad';
$lng['index'][11] = 'Enviar';
$lng['index'][12] = 'Nombre y Apellidos';
$lng['index'][13] = 'E-mail';
$lng['index'][14] = 'Dirección';
$lng['index'][15] = 'CP';
$lng['index'][16] = 'Telf';
$lng['index'][17] = 'Tu pregunta';
//index.php_____________________________________________________________________________________

//productos.php_____________________________________________________________________________________
$lng['productos'][0] = 'Nuestras categorías';
$lng['productos'][1] = 'Encuentra el producto más adecuado para tí';
$lng['productos'][2] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus accusamus distinctio accusantium?';
$lng['productos'][3] = 'Eficaps';
$lng['productos'][4] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus accusamus distinctio accusantium?';
$lng['productos'][5] = 'Mujer';
$lng['productos'][6] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus accusamus distinctio accusantium?';
$lng['productos'][7] = 'Autocuidado';
$lng['productos'][8] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus accusamus distinctio accusantium?';
$lng['productos'][9] = 'Senior';
$lng['productos'][10] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus accusamus distinctio accusantium?';
$lng['productos'][11] = 'Respira';
$lng['productos'][12] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa perspiciatis necessitatibus accusamus distinctio accusantium?';
$lng['productos'][13] = 'Infantil';

//productos.php_____________________________________________________________________________________

//productos_ysana_____________________________________________________________________________________
//productos_ysana_____________________________________________________________________________________


//footer.php_____________________________________________________________________________________
$lng['footer'][0] = 'Sobre Ysana';
$lng['footer'][1] = 'Valores';
$lng['footer'][2] = 'Compañía';
$lng['footer'][3] = 'Compromiso';
$lng['footer'][4] = 'Código ético';
$lng['footer'][5] = 'Sala Prensa';
$lng['footer'][6] = 'Prensa';
$lng['footer'][7] = 'Noticias';
$lng['footer'][8] = 'Vídeos';
$lng['footer'][9] = 'Material gráfico';
$lng['footer'][10] = 'Políticas';
$lng['footer'][11] = 'Aviso Legal';
$lng['footer'][12] = 'Política de privacidad';
$lng['footer'][13] = 'Política de cookies';
$lng['footer'][14] = 'Política de ventas';
$lng['footer'][15] = 'Club Ysana';
$lng['footer'][16] = 'Productos';

//footer.php_____________________________________________________________________________________

//experiencia/index.php_____________________________________________________________________________________
$lng['experiencia-index'][0] = 'COMPRAR';
$lng['experiencia-index'][1] = 'Iniciar Sesión';
$lng['experiencia-index'][2] = 'Crear cuenta';
//experiencia/index.php_____________________________________________________________________________________

//experiencia/carrito.php_____________________________________________________________________________________
$lng['experiencia-carrito'][0] = 'Artículos en';
$lng['experiencia-carrito'][1] = 'tu cesta';
$lng['experiencia-carrito'][2] = 'ARTÍCULO';
$lng['experiencia-carrito'][3] = 'PRECIO';
$lng['experiencia-carrito'][4] = 'UNIDADES';
$lng['experiencia-carrito'][5] = 'TOTAL';
$lng['experiencia-carrito'][6] = 'Con Ysana puedes beneficiarte de gastos de envío GRATIS';
$lng['experiencia-carrito'][7] = 'TOTAL';
$lng['experiencia-carrito'][8] = 'REALIZAR PEDIDO';
//experiencia/carrito.php_____________________________________________________________________________________




//

//Tipo producto
define('NORMAL', 1);
define('EXPERIENCIA', 2);

//Tipo tienda
define('ONLINE', 1);
define('DIRECTO', 2);

define('ACTIVADO', 1);
define('DESACTIVADO', 2);

$productos_ysana = array(
    array(
        'nombre_categoria' => 'Eficaps',
        'descripcion_categoria' => 'Descripción de Eficaps',
        'productos_categoria' => array(
            array(
                'nombre' => 'Eficaps Sueño',
                'url-seo' => 'eficaps_sueño',
                'img' => 'eficaps-sueno-caja-detalle-flor-capsula',
                'cabecera' => 'eficaps.mp4',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO,
                'url-tienda' => array(
                    'experiencia' => '',
                    'farmacia' => ''
                )
            ),
            array(
                'nombre' => 'Eficaps Ansiedad',
                'url-seo' => 'eficaps_ansiedad',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => DESACTIVADO,
                'url-tienda' => array(
                    'experiencia' => '',
                    'farmacia' => ''
                )
            ),
            array(
                'nombre' => 'Eficaps Defenses',
                'url-seo' => 'eficaps_defenses',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => DESACTIVADO,
                'url-tienda' => array(
                    'experiencia' => '',
                    'farmacia' => ''
                )
            )
        )
    ),
    array(
        'nombre_categoria' => 'Mujer',
        'descripcion_categoria' => 'Descripción de Mujer',
        'productos_categoria' => array(
            array(
                'nombre' => 'Y·Woman Menopausia',
                'url-seo' => 'ywoman_menopausia',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'adelgaYsana Forte',
                'url-seo' => 'adelgaysana_forte',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Light Legs',
                'url-seo' => 'light_legs',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => DESACTIVADO
            ),
            array(
                'nombre' => 'Easy Digest',
                'url-seo' => 'easy_digest',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => DESACTIVADO
            )
        )
    ),
    array(
        'nombre_categoria' => 'Autocuidado',
        'descripcion_categoria' => 'Descripción de Autocuidado',
        'productos_categoria' => array(
            array(
                'nombre' => 'Articular',
                'url-seo' => 'articular',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Colesterol',
                'url-seo' => 'colesterol',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            )
        )
    ),
    array(
        'nombre_categoria' => 'Respira',
        'descripcion_categoria' => 'Descripción de Respira',
        'productos_categoria' => array(
            array(
                'nombre' => 'Free Nose Aspirador Nasal Pediátrico + 4 recambios',
                'url-seo' => 'freenose_aspirador_nasal_pediatrico_4_recambios',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Agua de Mar Isotónica Pediátrico 120ml',
                'url-seo' => 'freenose_agua_mar_isotonica_pediatrico_120ml',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Agua de Mar Isotónica Pediátrico 30ml',
                'url-seo' => 'freenose_agua_mar_isotonica_pediatrico_30ml',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Agua de Mar Descongestionante 30ml',
                'url-seo' => 'freenose_agua_mar_descongestion_30ml',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Agua de Mar Descongestionante con Aloe vera y Menta 30ml',
                'url-seo' => 'freenose_agua_mar_descongestion_aloe_vera_30ml',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Spray Nasal Própolis +1',
                'url-seo' => 'freenose_spray_nasal_propolis_1',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Spray Nasal Própolis +12',
                'url-seo' => 'freenose_spray_nasal_propolis_12',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Spray Nasal Antialérgico',
                'url-seo' => 'freenose_antialergico_spray_nasal',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => DESACTIVADO
            )
        )
    ),
    array(
        'nombre_categoria' => 'Senior',
        'descripcion_categoria' => 'Descripción de Senior',
        'productos_categoria' => array(
            array(
                'nombre' => 'Bemory',
                'url-seo' => 'bemory_senior',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            )
        )
    ),
    array(
        'nombre_categoria' => 'Infantil',
        'descripcion_categoria' => 'Descripción de Infantil',
        'productos_categoria' => array(
            array(
                'nombre' => 'Bemory',
                'url-seo' => 'bemory_kids',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Multivitamin Kids',
                'url-seo' => 'multivitamin_kids',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Agua de Mar Isotónica Pediátrico 120ml',
                'url-seo' => 'freenose_agua_mar_isotonica_pediatrico_120ml',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Agua de Mar Isotónica Pediátrico 30ml',
                'url-seo' => 'freenose_agua_mar_isotonica_pediatrico_30ml',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Spray Nasal Própolis +1',
                'url-seo' => 'freenose_spray_nasal_propolis_1',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            ),
            array(
                'nombre' => 'Free Nose Spray Nasal Própolis +12',
                'url-seo' => 'freenose_spray_nasal_propolis_12',
                'img' => '',
                'tipo_producto' => NORMAL,
                'tipo_tienda' => DIRECTO,
                'activo' => ACTIVADO
            )
        )
    )
);

//echo '<pre>';
//print_r($productos);
//echo '</pre>';

?>