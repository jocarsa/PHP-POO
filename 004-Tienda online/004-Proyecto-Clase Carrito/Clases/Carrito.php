<?php

    class Carrito{
        private $productos;
        private $cliente;
        
        public function __construct(){
            $this->productos = [];
        }
        public function anadirProducto($producto){
            array_push($this->productos,$producto);
        }
    }