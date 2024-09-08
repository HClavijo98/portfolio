<?php
include_once('carta.class.php');
include_once('baraja.class.php');
include_once('jugador.class.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNO</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: darkslategrey;
        }

        .main {
            width: 70%;
            background-color: rgb(2, 140, 54);
            color: white;
            border: 20px solid chocolate;
            border-radius: 50px;
            padding-right: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .jugadores {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .carta {
            transition: transform 1s ease;
            width: 100px;
        }

        .carta:hover {
            transform: scale(1.5);
        }

        .boton {
            height: 70px;
            width: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: yellow;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            background-color: red;
            border-radius: 100%;
        }
    </style>
</head>

<body>
    <a href="UNO.php?reset" style="width: 100%; background-color: black; text-decoration: none; color: white;">Empezar de nuevo</a>
    <?php
    $res = 'UNO';
    
    function imprimirBaraja($baraja)
    {
        foreach ($baraja as $carta) {
            $carta->pintaCarta();
        }
    }
    if (isset($_REQUEST['reset'])) {
        $_SESSION['baraja'] = null;
        $_SESSION['J'] = null;
        $_SESSION['turno'] = null;
    }

    if (!isset($_SESSION['baraja'])) {
        $baraja = new baraja();
        $baraja->barajar();
        $jugador1 = new jugador(1, 'Jugador 1');
        $jugador2 = new jugador(2, 'Jugador 2');
        //--------------------------------------
        for ($i = 0; $i < 7; $i++) {
            $carta = $baraja->repartir();
            array_unshift($jugador1->cartas, $carta);
            $carta2 = $baraja->repartir();
            array_unshift($jugador2->cartas, $carta2);
        }
        $_SESSION['baraja'] = $baraja->getCartas();
        $_SESSION['J'][] = $jugador1;
        $_SESSION['J'][] = $jugador2;
        $_SESSION['turno'] = 1;
    }

    if (isset($_REQUEST['carta'])) {
        if ($_SESSION['turno'] % 2 != 0) {
            if ($_REQUEST['carta'] == 'coger') {
                $carta = array_shift($_SESSION['baraja']);
                $_SESSION['J'][0]->setCartas($carta);
            } else if ($_SESSION['J'][0]->getCartas()[$_REQUEST['carta']]->getNumero() == 'color') {
                $cartaColor = $_SESSION['J'][0]->getCartas()[$_REQUEST['carta']];
                $cartaColor->setColorOculto($_REQUEST['color']);
                $_SESSION['turno']++;
                unset($_SESSION['J'][0]->cartas[$_REQUEST['carta']]);
                $_SESSION['baraja'][] = $cartaColor;
            } else {
                $cartaPicked = $_SESSION['J'][0]->getCartas()[$_REQUEST['carta']];
                $ultima = $_SESSION['baraja'][count($_SESSION['baraja']) - 1];

                if ($cartaPicked->getNumero() == $ultima->getNumero() || $cartaPicked->getPalo() == $ultima->getPalo() || $cartaPicked->getPalo() == $ultima->getColorOculto()) {
                    if ($cartaPicked->numero == 'skip') {
                        $_SESSION['turno'] = $_SESSION['turno'] + 2;
                        unset($_SESSION['J'][0]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    } else if ($cartaPicked->numero == 'reverse') {
                        $_SESSION['turno'] = $_SESSION['turno'] - 1;
                        unset($_SESSION['J'][0]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    } else if ($cartaPicked->numero == 'picker') {
                        $_SESSION['turno']++;
                        $carta = array_shift($_SESSION['baraja']);
                        $_SESSION['J'][1]->setCartas($carta);
                        $carta2 = array_shift($_SESSION['baraja']);
                        $_SESSION['J'][1]->setCartas($carta2);
                        unset($_SESSION['J'][0]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    } else {
                        $_SESSION['turno']++;
                        unset($_SESSION['J'][0]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    }
                }
            }
        } else {
            if ($_REQUEST['carta'] == 'coger') {
                $carta = array_shift($_SESSION['baraja']);
                $_SESSION['J'][1]->setCartas($carta);
            } else if ($_SESSION['J'][1]->getCartas()[$_REQUEST['carta']]->getNumero() == 'color') {
                $cartaColor = $_SESSION['J'][1]->getCartas()[$_REQUEST['carta']];
                $cartaColor->setColorOculto($_REQUEST['color']);
                $_SESSION['turno']++;
                unset($_SESSION['J'][1]->cartas[$_REQUEST['carta']]);
                $_SESSION['baraja'][] = $cartaColor;
            } else {
                $cartaPicked = $_SESSION['J'][1]->getCartas()[$_REQUEST['carta']];
                $ultima = $_SESSION['baraja'][count($_SESSION['baraja']) - 1];

                if ($cartaPicked->getNumero() == $ultima->getNumero() || $cartaPicked->getPalo() == $ultima->getPalo() || $cartaPicked->getPalo() == $ultima->getColorOculto()) {
                    if ($cartaPicked->numero == 'skip') {
                        $_SESSION['turno'] = $_SESSION['turno'] + 2;
                        unset($_SESSION['J'][1]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    } else if ($cartaPicked->numero == 'reverse') {
                        $_SESSION['turno'] = $_SESSION['turno'] - 1;
                        unset($_SESSION['J'][1]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    } else if ($cartaPicked->numero == 'picker') {
                        $_SESSION['turno']++;
                        $carta = array_shift($_SESSION['baraja']);
                        $_SESSION['J'][0]->setCartas($carta);
                        $carta2 = array_shift($_SESSION['baraja']);
                        $_SESSION['J'][0]->setCartas($carta2);
                        unset($_SESSION['J'][1]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    } else {
                        $_SESSION['turno']++;
                        unset($_SESSION['J'][1]->cartas[$_REQUEST['carta']]);
                        $_SESSION['baraja'][] = $cartaPicked;
                    }
                }
            }
        }
        if ($_SESSION['J'][0]->cartas == null) {
            $res = '¡<span style="color: red;">UNO</span>! ' . $_SESSION['J'][0]->nombre . ' gana!';
        } else if ($_SESSION['J'][1]->cartas == null) {
            $res = '¡<span style="color: red;">UNO</span>! ' . $_SESSION['J'][1]->nombre . ' gana!';
        }
    }
    if (isset($_REQUEST['pasa'])) {
        $_SESSION['turno']++;
    }

    echo '<div class="main">';
    echo '<h1 style="text-align: center;">' . $res . '</h1><br>';
    if ($_SESSION['turno'] % 2 != 0) {
        echo '<div class="jugadores" style="border: 6px solid lightgreen;">';
        echo $_SESSION['J'][0]->getNombre() . ': <br>';
        $_SESSION['J'][0]->imprimecartasconlink();
        echo '</div>';
        echo '<div class="jugadores" style="display: flex; align-items: center; width: 100%; height: 154px; background-color: black; border: 6px solid white;">';
        echo '<h1>NO MIRES ...</h1>';
        echo '</div>';
    } else if ($_SESSION['turno'] % 2 == 0) {
        echo '<div class="jugadores" style="display: flex; align-items: center; width: 100%; height: 154px; background-color: black; border: 6px solid white;">';
        echo '<h1>NO MIRES ...</h1>';
        echo '</div>';
        echo '<div class="jugadores" style="border: 6px solid lightgreen;">';
        echo $_SESSION['J'][1]->getNombre() . ': <br>';
        $_SESSION['J'][1]->imprimecartasconlink();
        echo '</div>';
    }

    echo '<br> <div class="jugadores" style="display: flex; justify-content: space-around;align-items: center; flex-wrap: wrap;">
    <div style="width: 100%;"> PARTIDA: Turno ' . $_SESSION['turno'] . ' | '. $_SESSION['baraja'][count($_SESSION['baraja']) - 1]->palo .' '. $_SESSION['baraja'][count($_SESSION['baraja']) - 1]->colorOculto .'</div>';
    $ultima = $_SESSION['baraja'][count($_SESSION['baraja']) - 1];
    $ultima->pintaCarta();
    echo '<a href=UNO.php?carta=coger name= "carta">
    <img src="baraja_uno/atras.jpg" class="carta" style="border-radius: 10px;">
    </a>';
    echo '<a href=UNO.php?pasa name="pasa" class="boton">PASAR<br>TURNO</a></div>
    </div>';
    echo '</div>';
    ?>
</body>

</html>