<?php
class carta{
    public $palo;
    public $numero;
    public $colorOculto = '';

   public function __construct($palo, $numero){
    $this->palo = $palo;
    $this->numero = $numero;
   }

   function pintaCarta(){
    echo '<img src="img/'.$this->numero.'_'.$this->palo.'.png" class="carta">';
    // echo '<a href=UNO.php?carta='.$this->numero.'-'.$this->palo.' name= "carta">
    // <img src="baraja_uno/'.$this->numero.'_'.$this->palo.'.png" class="carta">
    // </a>';
    }

    /**
     * Get the value of palo
     */ 
    public function getPalo()
    {
        return $this->palo;
    }

    /**
     * Set the value of palo
     *
     * @return  self
     */ 
    public function setPalo($palo)
    {
        $this->palo = $palo;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of colorOculto
     */ 
    public function getColorOculto()
    {
        return $this->colorOculto;
    }

    /**
     * Set the value of colorOculto
     *
     * @return  self
     */ 
    public function setColorOculto($colorOculto)
    {
        $this->colorOculto = $colorOculto;

        return $this;
    }
}
?>