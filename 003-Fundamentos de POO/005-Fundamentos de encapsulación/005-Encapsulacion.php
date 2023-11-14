<?php
    class Producto{
        // Propiedades
        private $precio;
        // Métodos
        public function ponPrecio($nuevo_precio){
            $this->precio = $nuevo_precio;
        }
        public function dimePrecio(){
            echo $this->precio;
        }
    }
    
    $producto1 = new Producto();
    $producto1->ponPrecio(50);
    $producto1->dimePrecio();
?>