<?php
/* Smarty version 4.3.2, created on 2023-11-30 17:04:28
  from 'C:\xampp8.1.0\htdocs\M07\Objetos\Pokemon\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6568b28ca71609_06044153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6064feae973c4ba83e7c32d36976ddf3fadfb999' => 
    array (
      0 => 'C:\\xampp8.1.0\\htdocs\\M07\\Objetos\\Pokemon\\index.html',
      1 => 1701360197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6568b28ca71609_06044153 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creador de cartas</title>
    <style>
        span {
            font-size: 30px;
        }

        ul li {
            list-style: none;
            margin: 20px;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form action="smarty.php?crea" method="get">
        <ul>
            <li><span>Nombre: </span><input type="text" name="name" required>
                <span>Tipo: </span><input type="text" name="type" required>
            </li>
            <li><span>Nº de evoluciones: </span><input type="number" name="evolutions" required>
                <span>Vida: </span><input type="number" name="health" required>
            </li>
            <li><span>Defensa: </span><input type="number" name="def" required>
                <span>Ataque: </span><input type="number" name="atack" required>
            </li>
            <li><span>Legendario: </span>Si<input type="radio" name="legend" value="yes">
                No<input type="radio" name="legend" value="no"></li>
            <input type="submit" value="CREAR!">
        </ul>
    </form>
    <div id="cartas">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartas']->value, 'carta');
$_smarty_tpl->tpl_vars['carta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carta']->value) {
$_smarty_tpl->tpl_vars['carta']->do_else = false;
?>
        <div class="carta">
            <?php echo $_smarty_tpl->tpl_vars['carta']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['carta']->value['type'];?>

        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</body>

</html><?php }
}
