<?php
/* Smarty version 4.3.2, created on 2024-01-16 19:32:19
  from 'C:\xampp8.1.0\htdocs\M07\Objetos\Pokemon\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65a6cbb3579b81_84067271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12e1292c35b1489f3a8c15f1b3f6bd62b16a17c9' => 
    array (
      0 => 'C:\\xampp8.1.0\\htdocs\\M07\\Objetos\\Pokemon\\index.tpl',
      1 => 1704663958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a6cbb3579b81_84067271 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creador de cartas</title>
    <style>
        body{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background: url(img/wallpaper.jpg);
            background-size: cover;
            background-position: center center;
            font-family: "Arial";
        }
        span {
            font-size: 30px;
        }
        h1{
            color: rgb(255, 204, 1);
            width: 100%;
            justify-content: center;
            display: flex;
            align-items: center;
        }
        form{
            width: 50%;
        }
        .contForm{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        ul li {
            list-style: none;
            margin: 0;
            border: 2px solid black;
            background-color: #8A919F;
        }

        #cartas {
            display: flex;
            flex-wrap: wrap;
        }
        #datos{
            display: flex;
            flex-wrap: wrap;
        }
        .borra{
            text-decoration: none;
            color: black;
        }
        .tituCartas{
            font-size: 15px;
            style="width: 100%;
        }
        .tituCartas li{
            border: 0;
            background-color: rgba(255, 255, 255, 0);
            margin: 20px;
        }
        .carta {
            position: relative;
            width: 250px; 
            height: 300px; 
            position: relative;
        }
        .H2{
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <img src="img/logo.png" style="width: 200px;"></h1>
    <div class="contForm">
        <form action="pokemon.php" method="post" enctype="multipart/form-data">
        <ul>
            <li><span>Nombre: </span><input type="text" name="name" required>
                <span>Tipo: </span><select name="type" id="type">
                    <option value="normal">Normal</option>
                    <option value="scarlet">Fuego</option>
                    <option value="water">Agua</option>
                    <option value="grass">Planta</option>
                    <option value="lighting">Electrico</option>
                    <option value="psychic">Psiquico</option>
                    <option value="dragon">Dragon</option>
                    <option value="dark">Siniestro</option>
                    <option value="fighting">Lucha</option>
                    <option value="ice">Hielo</option>
                    <option value="fairy">Hada</option>
                    <option value="rock">Roca</option>
                    <option value="earth">Tierra</option>
                    <option value="bug">Bicho</option>
                    <option value="steel">Acero</option>
                </select>
            </li>
            <li><span>Nº de evolucion: </span><input type="number" name="evolutions" max="5" required>
                <span>Vida: </span><input type="number" name="health" required>
            </li>
            <li><span>Defensa: </span><input type="number" name="def" required>
                <span>Ataque: </span><input type="number" name="atack" required>
            </li>
            <li><span>Legendario: </span>Si<input type="radio" name="legend" value="Yes">
                No<input type="radio" name="legend" value="No">
                <span>Imagen: </span><input type="file" name="imagen">
            </li>
            <input type="submit" value="CREAR!">
            <button><a href="pokemon.php?borraU" class="borra">BORRAR ULTIMA</a></button>
            <button><a href="pokemon.php?borra" class="borra">BORRAR</a></button>
        </ul>
        </form>
    </div>
    <div id="cartas">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartas']->value, 'carta');
$_smarty_tpl->tpl_vars['carta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['carta']->value) {
$_smarty_tpl->tpl_vars['carta']->do_else = false;
?>
        <div class="carta">
            <?php if ($_smarty_tpl->tpl_vars['carta']->value->getImagen()) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['carta']->value->getImagen();?>
" alt="Imagen subida" style="position: absolute; top: 30px; left: 10px; width: 90%; height: 50%;">
            <?php } else { ?>
            <p>No se ha proporcionado ninguna imagen.</p>
            <?php }?>
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['carta']->value->getType();?>
.png" alt="Cuerpo de carta" style="width: 100%; position: relative; border-radius: 10px;">
            <span class="H2" style="width: 100%; position: absolute; top: 10px; left: 45px;"><?php echo $_smarty_tpl->tpl_vars['carta']->value->getName();?>
  HP:<?php echo $_smarty_tpl->tpl_vars['carta']->value->getProperties(0);?>
</span>
            <div id="datos" style="position: absolute; top: 170px;">
                <div style="width: 50%; position: relative;">
                    <ul class="tituCartas" style="position: relative; top: 5px; right: 10px;">
                        <li>LEGENDARY: <?php echo $_smarty_tpl->tpl_vars['carta']->value->getProperties(3);?>
</li>
                        <li>EVOLUTION: <?php echo $_smarty_tpl->tpl_vars['carta']->value->getEvolution();?>
</li>
                    </ul>
                </div>
                <div style="width: 50%; position: absolute; left: 50%; top: 0px;">
                    <ul class="tituCartas" style="position: relative; top: 5px;">
                        <li>ATCK: <?php echo $_smarty_tpl->tpl_vars['carta']->value->getProperties(2);?>
</li>
                        <li>DEF: <?php echo $_smarty_tpl->tpl_vars['carta']->value->getProperties(1);?>
</li>
                    </ul>  
                </div>
            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</body>

</html><?php }
}
