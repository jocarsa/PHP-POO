<?php

    class Carrito{
        private $productos;
        private $cliente;
        private $total;
        
        public function __construct(){
            $this->productos = [];
        }
        public function anadirProducto($producto){
            array_push($this->productos,$producto);
        }
        public function listarProductos(){
            return $this->productos;
        }
        public function sumarTotal(){
            $total = 0;
            foreach($this->productos as $producto){
                $total += $producto->dimePrecio();
            }
            return $total;
        }
        public function anadirCliente($nuevocliente){
            $this->cliente = $nuevocliente;
        }
    }

?>