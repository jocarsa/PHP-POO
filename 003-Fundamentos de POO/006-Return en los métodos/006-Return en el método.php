<?php
    class Producto{
        // Propiedades
        private $precio;
        // Métodos
        public function ponPrecio($nuevo_precio){
            $this->precio = $nuevo_precio;
        }
        public function dimePrecio(){
            return $this->precio;
        }
    }
    
    $producto1 = new Producto();
    $producto1->ponPrecio(50);
    echo $producto1->dimePrecio();
?>