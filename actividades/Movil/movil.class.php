<?php
class movil{
    protected $id;

    protected $marca;

    protected $modelo;

    protected $maxLlamadas;

    protected $maxDatos;

    protected $historialMSG = [];

    protected $wallpaper;

    public function __construct($id, $marca, $modelo, $wallpaper)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->maxLlamadas = rand(10,20);
        $this->maxDatos = rand(1000,1500);
        $this->historialMSG = [];
        $this->wallpaper = $wallpaper;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

        /**
         * Get the value of modelo
         */ 
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */ 
        public function setModelo($modelo)
        {
                $this->modelo = $modelo;

                return $this;
        }

    /**
     * Get the value of maxLlamadas
     */ 
    public function getMaxLlamadas()
    {
        return $this->maxLlamadas;
    }

    /**
     * Set the value of maxLlamadas
     *
     * @return  self
     */ 
    public function setMaxLlamadas($maxLlamadas)
    {
        $this->maxLlamadas -= $maxLlamadas;

        return $this;
    }

    /**
     * Get the value of maxDatos
     */ 
    public function getMaxDatos()
    {
        return $this->maxDatos;
    }

    /**
     * Set the value of maxDatos
     *
     * @return  self
     */ 
    public function setMaxDatos($maxDatos)
    {
        $this->maxDatos -= $maxDatos;

        return $this;
    }

    /**
     * Get the value of historialMSG
     */ 
    public function getHistorialMSG()
    {
        return $this->historialMSG;
    }

    /**
     * Set the value of historialMSG
     *
     * @return  self
     */ 
    public function setHistorialMSG($MSG)
    {
        $this->historialMSG[] = $MSG;

        return $this;
    }

    /**
     * Get the value of wallpaper
     */ 
    public function getWallpaper()
    {
        return $this->wallpaper;
    }

    /**
     * Set the value of wallpaper
     *
     * @return  self
     */ 
    public function setWallpaper($wallpaper)
    {
        $this->wallpaper = $wallpaper;

        return $this;
    }
    public function cridar(){
        $this->setMaxLlamadas(1);
    }
    public function guardar($msg,$cant){
        $this->setHistorialMSG($msg);
        $this->setMaxDatos($cant);
    }
}
?>