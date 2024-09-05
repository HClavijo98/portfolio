<?php
include_once('carta.class.php');
class jugador{
    public $id;
    public $nombre;
    public $cartas = [];

    public function __construct($id, $nombre){
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function jugarCarta($pos){
        $carta = array_splice($this->cartas, $pos, 1)[0];
        return $carta;
    }

    /**
     * Get the value of id
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id){
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre){
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of cartas
     */
    public function getCartas(){
        return $this->cartas;
    }

    /**
     * Set the value of cartas
     *
     * @return  self
     */
    public function setCartas($cartas){
        $this->cartas[] = $cartas;

        return $this;
    }
    function imprimecartas(){
        foreach ($this->cartas as $key => $value) {
            $value->pintaCarta();
        }
    }
    function imprimecartasconlink(){
        foreach ($this->cartas as $key => $value) {
            if ($value->numero == 'color') {
                echo '<div id="color" style="position: relative;"><a href=UNO.php?carta=' . $key . '&color=red name= "carta"><div style="position: absolute; width: 50px; height: 75px; background-color: rgba(255, 0, 0, 0.5); border-top-left-radius: 15px;"></div></a>
                <a href=UNO.php?carta=' . $key . '&color=blue name= "carta"><div style="position: absolute; left: 50px; width: 50px; height: 75px; background-color: rgba(0, 0, 255, 0.5); border-top-right-radius: 15px;"></div></a>';
                $value->pintaCarta();
                echo '<a href=UNO.php?carta=' . $key . '&color=yellow name= "carta"><div style="position: absolute; top: 75px; width: 50px; height: 75px; background-color: rgba(255, 255, 0, 0.5); border-bottom-left-radius: 15px;"></div></a>
                <a href=UNO.php?carta=' . $key . '&color=green name= "carta"><div style="position: absolute; top: 75px; left: 50px; width: 50px; height: 75px; background-color: rgba(0, 128, 0, 0.5); border_bottom-right-radius: 15px;"></div></a></div>';
            } else {
                echo '<a href=UNO.php?carta=' . $key . ' name= "carta">';
                $value->pintaCarta();
                echo '</a>';
            }
        }
    }
}
?>