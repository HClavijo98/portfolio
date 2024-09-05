<?php
require('smarty/libs/Smarty.class.php');
include_once('cartaP.class.php');
session_start();

$smarty = new Smarty;

if (isset($_REQUEST['borra'])) {
    $_SESSION['baraja'] = null;
}
if (isset($_REQUEST['borraU'])) {
    array_pop($_SESSION['baraja']);
}
if(!isset($_SESSION['baraja'])) {
    $_SESSION['baraja'] = [];
}
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    $type = $_REQUEST['type'];
    $evo = $_REQUEST['evolutions'];
    $health = $_REQUEST['health'];
    $def = $_REQUEST['def'];
    $atk = $_REQUEST['atack'];
    $leg = $_REQUEST['legend'];

    // Procesar la imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagenNombre = $_FILES['imagen']['name'];
        $imagenTemporal = $_FILES['imagen']['tmp_name'];
        $directorioDestino = 'img/';

        // Mueve el archivo de la ubicación temporal al directorio destino
        $rutaCompleta = $directorioDestino . $imagenNombre;
        move_uploaded_file($imagenTemporal, $rutaCompleta);
    } else {
        // Manejar error al subir la imagen
        echo 'Error al subir la imagen.';
        exit; // Puedes manejar esto de manera más robusta según tus necesidades
    }

    $prop = [$health, $def, $atk, $leg];

    $carta = new Carta($name, $type, $evo, $prop, $rutaCompleta);
   $_SESSION['baraja'][] = $carta;
}

$title = "Crea tu propia carta";

$smarty->assign("titulo", $title);
$smarty->assign("cartas", $_SESSION['baraja']);


$smarty->display("index.tpl");
//$smarty->display("biblioteca.html");

?>