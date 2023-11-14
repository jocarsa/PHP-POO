<?php
    class Producto{
        // Propiedades
        private $precio;
        // Métodos
        public function __construct($precio){
            $this->precio = $precio;
        }
        public function ponPrecio($nuevo_precio){
            $this->precio = $nuevo_precio;
        }
        public function dimePrecio(){
            return $this->precio;
        }
    }
    
    $producto1 = new Producto(50);
    echo $producto1->dimePrecio();
?>