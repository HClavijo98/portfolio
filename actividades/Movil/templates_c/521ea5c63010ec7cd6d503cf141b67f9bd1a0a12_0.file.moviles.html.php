<?php
/* Smarty version 4.3.2, created on 2023-12-13 11:58:53
  from 'C:\xampp8.1.0\htdocs\M07\Objetos\Movil\moviles.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65798e6d9178b7_77687020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '521ea5c63010ec7cd6d503cf141b67f9bd1a0a12' => 
    array (
      0 => 'C:\\xampp8.1.0\\htdocs\\M07\\Objetos\\Movil\\moviles.html',
      1 => 1702465132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65798e6d9178b7_77687020 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moviles</title>
    <style>
        body{
            display: flex;
            flex-wrap: wrap;
            font-family: Arial, Helvetica, sans-serif;
        }
        a {
            position: absolute;
            top: 405px;
            left: 175px;
            background-color: white;
            border-radius: 100%;
            padding: 5px;
        }

        a img {
            width: 30px;
            height: 30px;
        }
        .movil{
            width: 300px;
        }

        .center{
            width: 100%;
            text-align: center;
        }
        .wallpaper{
            position: absolute; 
            left: 113px; 
            top: 85px; 
            width: 175px; 
            height: 370px; 
            border-radius: 10px;
        }
        .texto{
            width: 170px;
            height: 285px;
            background-color: rgba(255, 255, 255, 0.5); 
            position: absolute; 
            top: 90px; 
            left: 115px;
            border-radius: 5px;
        }
        .mensajes{
            overflow: auto;
        }
        .mensajes ul li{
            list-style-type: none;
            margin-left: -35px;
        }
    </style>
</head>

<body>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['moviles']->value, 'movil');
$_smarty_tpl->tpl_vars['movil']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movil']->value) {
$_smarty_tpl->tpl_vars['movil']->do_else = false;
?>
    <div class="movil" style="position: relative;">
        <h2 class="center"><?php echo $_smarty_tpl->tpl_vars['movil']->value->getMarca();?>
 - <?php echo $_smarty_tpl->tpl_vars['movil']->value->getModelo();?>
</h2>
        <img src="img/phone.jpg" alt="movil">
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['movil']->value->getWallpaper();?>
" alt="wallpaper" class="wallpaper">
        <div class="texto">
            <div class="mensajes" style="width: 100%; height: 200px;">
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movil']->value->getHistorialMSG(), 'mensaje');
$_smarty_tpl->tpl_vars['mensaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mensaje']->value) {
$_smarty_tpl->tpl_vars['mensaje']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            </div>
            <form action="moviles.php" method="get">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['movil']->value->getId();?>
">
                <textarea name="msg" id="msg" cols="20" rows="5"></textarea>
                <input type="submit" name="enviar" id="enviar">
            </form>
        </div>
        <a href="moviles.php?call&id=<?php echo $_smarty_tpl->tpl_vars['movil']->value->getId();?>
">
            <img src="img/boton.png" alt="Boton de llamada">
        </a>
        <p class="center">Llamadas: <?php echo $_smarty_tpl->tpl_vars['movil']->value->getMaxLlamadas();?>
 - Datos: <?php echo $_smarty_tpl->tpl_vars['movil']->value->getMaxDatos();?>
</p>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>

</html><?php }
}
