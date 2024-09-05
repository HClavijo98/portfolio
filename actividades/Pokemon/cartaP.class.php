<?php
class Carta{
    protected $name;
    protected $type;
    protected $evolution;
    protected $properties = [];
    protected $imagen;

    public function __construct($name, $type, $evolution, $properties, $imagen){
        $this->name = $name;
        $this->type = $type;
        $this->evolution = $evolution;
        $this->properties = $properties;
        $this->imagen = $imagen;
    }

    /**
     * Get the value of name
     */ 
    public function getName(){
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name){
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType(){
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type){
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of evolution
     */ 
    public function getEvolution(){
        return $this->evolution;
    }

    /**
     * Set the value of evolution
     *
     * @return  self
     */ 
    public function setEvolution($evolution){
        $this->evolution = $evolution;

        return $this;
    }

    /**
     * Get the value of properties
     */ 
    public function getProperties($i){
        return $this->properties[$i];
    }

    /**
     * Set the value of properties
     *
     * @return  self
     */ 
    public function setProperties($propiedad){
        $this->properties[] = $propiedad;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
}
?>