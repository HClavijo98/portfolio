<?php
require('smarty/libs/Smarty.class.php');
include_once('movil.class.php');
session_start();

$smarty = new Smarty;

if(!isset($_SESSION['moviles'])){
    $_SESSION['moviles'] = [];
    $movil = new movil(1,'iPhone','15','wlp1.jpg');
    $movil2 = new movil(2,'Samsung','Galaxy S23','wlp2.jpg');
    $movil3 = new movil(3,'Huawei','Nova Y70','wlp3.jpg');
    $movil4 = new movil(4,'Motorola','Edge+','wlp4.jpg');

    $_SESSION['moviles'][] = $movil;
    $_SESSION['moviles'][] = $movil2;
    $_SESSION['moviles'][] = $movil3;
    $_SESSION['moviles'][] = $movil4;
}
if(isset($_REQUEST['msg'])){
    $cantidad = strlen($_REQUEST['msg']);
    foreach($_SESSION['moviles'] as $movil){
        if($movil->getId() == $_REQUEST['id'] && $movil->getMaxDatos() > 0){
            $movil->guardar($_REQUEST['msg'],$cantidad);
        }
    }
}
if(isset($_REQUEST['call'])){
    foreach($_SESSION['moviles'] as $movil){
        if($movil->getId() == $_REQUEST['id'] && $movil->getMaxLlamadas() > 0){
                $movil->cridar();
        }
    }
}

$smarty->assign("moviles", $_SESSION['moviles']);

$smarty->display("moviles.html");
?>