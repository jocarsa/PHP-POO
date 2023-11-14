<?php
    class Producto{
        // Propiedades
        private $precio;
        private $nombre;
        private $descripción;
        // Métodos
        public function __construct($nombre,$descripcion,$precio){
            $this->nombre = $nombre;
            $this->descripcion = $descripcion;
            $this->precio = $precio;
        }
        public function ponPrecio($nuevo_precio){
            $this->precio = $nuevo_precio;
        }
        public function dimePrecio(){
            return $this->precio;
        }
    }
    
    $producto1 = new Producto("Zapatillas","Zapatillas deportivas de color blanco",50);
    echo $producto1->dimePrecio();
?>