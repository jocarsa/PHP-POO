<?php

    class Direccion{
        private $tipo;
        private $calle;
        private $codigopostal;
        private $localidad;
        private $pais;

        
        public function __construct($tipo,$calle,$codigopostal,$localidad,$pais){
            $this->tipo = $tipo;
            $this->calle = $calle;
            $this->codigopostal = $codigopostal;
            $this->localidad = $localidad;
            $this->pais = $pais;
        }
    }

?>