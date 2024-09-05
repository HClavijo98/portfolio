<!DOCTYPE html>
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

    <h1>{$titulo} <img src="img/logo.png" style="width: 200px;"></h1>
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
        {foreach $cartas as $carta}
        <div class="carta">
            {if $carta->getImagen()}
            <img src="{$carta->getImagen()}" alt="Imagen subida" style="position: absolute; top: 30px; left: 10px; width: 90%; height: 50%;">
            {else}
            <p>No se ha proporcionado ninguna imagen.</p>
            {/if}
            <img src="img/{$carta->getType()}.png" alt="Cuerpo de carta" style="width: 100%; position: relative; border-radius: 10px;">
            <span class="H2" style="width: 100%; position: absolute; top: 10px; left: 45px;">{$carta->getName()}  HP:{$carta->getProperties(0)}</span>
            <div id="datos" style="position: absolute; top: 170px;">
                <div style="width: 50%; position: relative;">
                    <ul class="tituCartas" style="position: relative; top: 5px; right: 10px;">
                        <li>LEGENDARY: {$carta->getProperties(3)}</li>
                        <li>EVOLUTION: {$carta->getEvolution()}</li>
                    </ul>
                </div>
                <div style="width: 50%; position: absolute; left: 50%; top: 0px;">
                    <ul class="tituCartas" style="position: relative; top: 5px;">
                        <li>ATCK: {$carta->getProperties(2)}</li>
                        <li>DEF: {$carta->getProperties(1)}</li>
                    </ul>  
                </div>
            </div>
        </div>
        {/foreach}
    </div>
</body>

</html>