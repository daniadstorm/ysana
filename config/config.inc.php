<?php
/* RUTAS */
//-------------------------------------------------------------------------------------

$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$base = "http://" . $host . $uri . "/";
/* $ruta_inicio = 'http://localhost/ysana/';
$ruta_archivos = 'http://localhost/ysana/'; */
$ruta_inicio = 'http://192.168.153.23/ysana/';
$ruta_archivos = 'http://192.168.153.23/ysana/';
//$ruta_inicio = 'https://steampunkseo.es/ysana/';
//$ruta_archivos = 'https://steampunkseo.es/ysana/';
$document_root = $_SERVER['DOCUMENT_ROOT'].'/ysana/';
//====================================================================================

/* CONSTANTES */
//-------------------------------------------------------------------------------------
define('DOCUMENT_ROOT', $document_root);
define('ADMIN', 1);
define('USER', 10);
define('REQ_FIELD', 'campo_requerido');
define('EMPTY_DATE', '1970-01-01');
//-------------------------------------------------------------------------------------

/* LIBRERIA DE FUNCIONES */
//-------------------------------------------------------------------------------------
include_once(DOCUMENT_ROOT.'func/func.inc.php');
//====================================================================================

/* LIBRERIA DE BD */
//-------------------------------------------------------------------------------------
include_once(DOCUMENT_ROOT.'model/model.class.php');
$rootM = new Model(); //rootModel; supervariable raiz de modelo
//====================================================================================

/* INICIO DE SESION */
//-------------------------------------------------------------------------------------
if(!isset($_SESSION)) session_start();
//====================================================================================

/* CONFIGURANDO LENGUAJE */
//-------------------------------------------------------------------------------------
//castellano asignado por defecto doblemente
//lang = el nombre del lenguaje
//lng = array de textos
/* if (isset($_POST['idioma_seleccionado'])) $_SESSION['lang'] = $_POST['idioma_seleccionado']; */
if (isset($_REQUEST['idioma_seleccionado'])) $_SESSION['lang'] = $_REQUEST['idioma_seleccionado'];
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'cast';
switch ($lang) {
    default:
    case 'cast':        include_once(DOCUMENT_ROOT.'lang/lang.cast.php');   break; //por defecto cast
    case 'eng':         include_once(DOCUMENT_ROOT.'lang/lang.eng.php');    break; 
    case 'cat':         include_once(DOCUMENT_ROOT.'lang/lang.cat.php');    break;
    case 'fra':         include_once(DOCUMENT_ROOT.'lang/lang.fra.php');    break;
}
//====================================================================================
?>