<?php
include_once('carta.class.php');
class baraja
{
    public $cartas = [];
    public function __construct(){
        $palos = ['red', 'blue', 'green', 'yellow'];
        $num = ['1','2','3','4','5','6','7','8','9','reverse','picker','skip'];

        foreach ($palos as $value) {
            foreach ($num as $value2) {
                //$carta=['palo'=>$value, 'numero'=>$value2];
                $carta = new carta($value, $value2);
                array_push($this->cartas, $carta);
                array_push($this->cartas, $carta);
            }
        }
        foreach ($palos as $value) {
            //$carta=['palo'=>$value, 'numero'=>0];
            $carta = new Carta($value, '0');
            $carta1 = new Carta('changer','color');
            array_push($this->cartas, $carta);
            array_push($this->cartas, $carta1);
        }
    }

    function barajar(){
        shuffle($this->cartas);
    }

    function repartir(){
        if(!empty($this->cartas)){
        $carta = array_pop($this->cartas);
        }else{
            echo'Esta baraja esta vacia';
        }
        return $carta;
    }

    /**
     * Get the value of cartas
     */
    

    /**
     * Get the value of cartas
     */ 
    public function getCartas()
    {
        return $this->cartas;
    }

    /**
     * Set the value of cartas
     *
     * @return  self
     */ 
    public function setCartas($cartas)
    {
        $this->cartas = $cartas;

        return $this;
    }
}
?>