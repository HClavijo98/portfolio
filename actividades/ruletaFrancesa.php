<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ruletaFrancesa.css">
    <title>Document</title>
</head>

<body>
    <figure>
        <img src="img/ruleta.png" alt="ruleta" class="imagen-rotativa">
        <img src="img/ruletaTablero.png" alt="tablero" class="tablero">
    </figure>
    <div class="general">
        <div class="res">
            APUESTA 1:<br>
            <?php

            $rand = rand(0, 36);
            $gana = 0;

            if (isset($_REQUEST["a1"]) && isset($_REQUEST["tipo1"]) && isset($_REQUEST["num1"])) {
                $a1 = $_REQUEST["a1"];
                $tipo1 = $_REQUEST["tipo1"];
                $num1 = $_REQUEST["num1"];

                if ($tipo1 == "sencilla") {
                    if ($rand == $num1) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 35;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "falta/pasa") {
                    if (($rand >= 1) && ($rand <= 18)) {
                        if (($num1 == "falta") && ($rand >= 1)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        } elseif (($num1 == "pasa") && ($rand <= 18)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        }
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "par/impar") {
                    if (($rand % 2 == 0) && ($num1 == "par")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand % 2 != 0) && ($num1 == "impar")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "rojo/negro") {
                    if (
                        ($rand == 1 || $rand == 3 || $rand == 5 || $rand == 7 || $rand == 9 || $rand == 12 || $rand == 14 || $rand == 16 || $rand == 18 || $rand == 19 || $rand == 21 || $rand == 23 || $rand == 25 || $rand == 27 || $rand == 30 || $rand == 32 || $rand == 34 || $rand == 36)
                        && ($num1 == "rojo")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (
                        ($rand == 2 || $rand == 4 || $rand == 6 || $rand == 8 || $rand == 10 || $rand == 11 || $rand == 13 || $rand == 15 || $rand == 17 || $rand == 20 || $rand == 22 || $rand == 24 || $rand == 26 || $rand == 28 || $rand == 29 || $rand == 31 || $rand == 33 || $rand == 35)
                        && ($num1 == "negro")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "docena") {
                    if (($rand >= 1 && $rand <= 12) && ($num1 >= 1 && $num1 <= 12)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 13 && $rand <= 24) && ($num1 >= 13 && $num1 <= 24)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 25 && $rand <= 36) && ($num1 >= 25 && $num1 <= 36)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "seisena") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3]) || ($rand == $numeros[4]) || ($rand == $numeros[5])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 6;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "cuadro") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 9;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "transversal") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 12;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "caballo") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 18;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "columna") {
                    if ($num1 == 1) {
                        $i = 1;
                        while ($i < 34) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 2) {
                        $i = 2;
                        while ($i < 35) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 3) {
                        $i = 3;
                        while ($i < 36) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                }


            } else {
                echo "Algo va mal.";
            }
            echo "<br>";


            echo "</div>";
            echo "<div class='res'>";
            echo "APUESTA 2:<br>";




            if (isset($_REQUEST["a2"]) && isset($_REQUEST["tipo2"]) && isset($_REQUEST["num2"])) {
                $a1 = $_REQUEST["a2"];
                $tipo1 = $_REQUEST["tipo2"];
                $num1 = $_REQUEST["num2"];

                if ($tipo1 == "sencilla") {
                    if ($rand == $num1) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 35;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "falta/pasa") {
                    if (($rand >= 1) && ($rand <= 18)) {
                        if (($num1 == "falta") && ($rand >= 1)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        } elseif (($num1 == "pasa") && ($rand <= 18)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        }
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "par/impar") {
                    if (($rand % 2 == 0) && ($num1 == "par")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand % 2 != 0) && ($num1 == "impar")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "rojo/negro") {
                    if (
                        ($rand == 1 || $rand == 3 || $rand == 5 || $rand == 7 || $rand == 9 || $rand == 12 || $rand == 14 || $rand == 16 || $rand == 18 || $rand == 19 || $rand == 21 || $rand == 23 || $rand == 25 || $rand == 27 || $rand == 30 || $rand == 32 || $rand == 34 || $rand == 36)
                        && ($num1 == "rojo")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (
                        ($rand == 2 || $rand == 4 || $rand == 6 || $rand == 8 || $rand == 10 || $rand == 11 || $rand == 13 || $rand == 15 || $rand == 17 || $rand == 20 || $rand == 22 || $rand == 24 || $rand == 26 || $rand == 28 || $rand == 29 || $rand == 31 || $rand == 33 || $rand == 35)
                        && ($num1 == "negro")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "docena") {
                    if (($rand >= 1 && $rand <= 12) && ($num1 >= 1 && $num1 <= 12)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 13 && $rand <= 24) && ($num1 >= 13 && $num1 <= 24)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 25 && $rand <= 36) && ($num1 >= 25 && $num1 <= 36)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "seisena") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3]) || ($rand == $numeros[4]) || ($rand == $numeros[5])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 6;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "cuadro") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 9;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "transversal") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 12;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "caballo") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 18;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "columna") {
                    if ($num1 == 1) {
                        $i = 1;
                        while ($i < 34) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 2) {
                        $i = 2;
                        while ($i < 35) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 3) {
                        $i = 3;
                        while ($i < 36) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                }


            } else {
                echo "Algo va mal.";
            }
            echo "<br>";


            echo "</div>";
            echo "<div class='res'>";
            echo "APUESTA 3:<br>";

            if (isset($_REQUEST["a3"]) && isset($_REQUEST["tipo3"]) && isset($_REQUEST["num3"])) {
                $a1 = $_REQUEST["a3"];
                $tipo1 = $_REQUEST["tipo3"];
                $num1 = $_REQUEST["num3"];

                if ($tipo1 == "sencilla") {
                    if ($rand == $num1) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 35;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "falta/pasa") {
                    if (($rand >= 1) && ($rand <= 18)) {
                        if (($num1 == "falta") && ($rand >= 1)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        } elseif (($num1 == "pasa") && ($rand <= 18)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        }
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "par/impar") {
                    if (($rand % 2 == 0) && ($num1 == "par")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand % 2 != 0) && ($num1 == "impar")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "rojo/negro") {
                    if (
                        ($rand == 1 || $rand == 3 || $rand == 5 || $rand == 7 || $rand == 9 || $rand == 12 || $rand == 14 || $rand == 16 || $rand == 18 || $rand == 19 || $rand == 21 || $rand == 23 || $rand == 25 || $rand == 27 || $rand == 30 || $rand == 32 || $rand == 34 || $rand == 36)
                        && ($num1 == "rojo")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (
                        ($rand == 2 || $rand == 4 || $rand == 6 || $rand == 8 || $rand == 10 || $rand == 11 || $rand == 13 || $rand == 15 || $rand == 17 || $rand == 20 || $rand == 22 || $rand == 24 || $rand == 26 || $rand == 28 || $rand == 29 || $rand == 31 || $rand == 33 || $rand == 35)
                        && ($num1 == "negro")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "docena") {
                    if (($rand >= 1 && $rand <= 12) && ($num1 >= 1 && $num1 <= 12)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 13 && $rand <= 24) && ($num1 >= 13 && $num1 <= 24)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 25 && $rand <= 36) && ($num1 >= 25 && $num1 <= 36)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "seisena") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3]) || ($rand == $numeros[4]) || ($rand == $numeros[5])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 6;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "cuadro") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 9;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "transversal") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 12;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "caballo") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 18;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "columna") {
                    if ($num1 == 1) {
                        $i = 1;
                        while ($i < 34) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 2) {
                        $i = 2;
                        while ($i < 35) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 3) {
                        $i = 3;
                        while ($i < 36) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                }


            } else {
                echo "Algo va mal.";
            }
            echo "</div>";
            echo "<div class='res'>";
            echo "APUESTA 4:<br>";
            if (isset($_REQUEST["a4"]) && isset($_REQUEST["tipo4"]) && isset($_REQUEST["num4"])) {
                $a1 = $_REQUEST["a4"];
                $tipo1 = $_REQUEST["tipo4"];
                $num1 = $_REQUEST["num4"];

                if ($tipo1 == "sencilla") {
                    if ($rand == $num1) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 35;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "falta/pasa") {
                    if (($rand >= 1) && ($rand <= 18)) {
                        if (($num1 == "falta") && ($rand >= 1)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        } elseif (($num1 == "pasa") && ($rand <= 18)) {
                            echo "Tu apuesta: $a1 <br>";
                            echo "Ha caido: $rand <br>";
                            echo "Tu numero: $num1 <br>";
                            $gana = $a1 * 2;
                            echo "Has ganado!!! Recibes: " . $gana;
                        }
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "par/impar") {
                    if (($rand % 2 == 0) && ($num1 == "par")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand % 2 != 0) && ($num1 == "impar")) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "rojo/negro") {
                    if (
                        ($rand == 1 || $rand == 3 || $rand == 5 || $rand == 7 || $rand == 9 || $rand == 12 || $rand == 14 || $rand == 16 || $rand == 18 || $rand == 19 || $rand == 21 || $rand == 23 || $rand == 25 || $rand == 27 || $rand == 30 || $rand == 32 || $rand == 34 || $rand == 36)
                        && ($num1 == "rojo")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (
                        ($rand == 2 || $rand == 4 || $rand == 6 || $rand == 8 || $rand == 10 || $rand == 11 || $rand == 13 || $rand == 15 || $rand == 17 || $rand == 20 || $rand == 22 || $rand == 24 || $rand == 26 || $rand == 28 || $rand == 29 || $rand == 31 || $rand == 33 || $rand == 35)
                        && ($num1 == "negro")
                    ) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 2;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif ($rand == 0) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 / 2;
                        echo "Ha salido 0, pierdes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "docena") {
                    if (($rand >= 1 && $rand <= 12) && ($num1 >= 1 && $num1 <= 12)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 13 && $rand <= 24) && ($num1 >= 13 && $num1 <= 24)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } elseif (($rand >= 25 && $rand <= 36) && ($num1 >= 25 && $num1 <= 36)) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 3;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "seisena") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3]) || ($rand == $numeros[4]) || ($rand == $numeros[5])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 6;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "cuadro") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2]) || ($rand == $numeros[3])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 9;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "transversal") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1]) || ($rand == $numeros[2])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 12;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "caballo") {
                    $numeros = explode(",", $num1);
                    if (($rand == $numeros[0]) || ($rand == $numeros[1])) {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        $gana = $a1 * 18;
                        echo "Has ganado!!! Recibes: " . $gana;
                    } else {
                        echo "Tu apuesta: $a1 <br>";
                        echo "Ha caido: $rand <br>";
                        echo "Tu numero: $num1 <br>";
                        echo "Ha caido el numero " . $rand . ". Has perdido.";
                    }
                } elseif ($tipo1 == "columna") {
                    if ($num1 == 1) {
                        $i = 1;
                        while ($i < 34) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 2) {
                        $i = 2;
                        while ($i < 35) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                    if ($num1 == 3) {
                        $i = 3;
                        while ($i < 36) {
                            if ($rand == $i) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                $gana = $a1 * 3;
                                echo "Has ganado!!! Recibes: " . $gana;
                            } elseif (($i = 34) && ($i != $rand)) {
                                echo "Tu apuesta: $a1 <br>";
                                echo "Ha caido: $rand <br>";
                                echo "Tu numero: $num1 <br>";
                                echo "Ha caido el numero " . $rand . ". Has perdido.";
                            }
                            $i = $i + 3;
                        }
                    }
                }
            } else {
                echo "Algo va mal.";
            }
            echo "</div>"
                ?>
        </div>
</body>

</html>