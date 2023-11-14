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
        public function dimeNombre(){
            return $this->nombre;
        }
        public function dameDatos(){
            return [$this->nombre,$this->descripcion,$this->precio];
        }
    }

    class ProductoFisico extends Producto{
        // Propiedades
        private $anchura;
        private $altura;
        private $profundidad;
        private $peso;
    }
    class ProductoVirtual extends Producto{
        // Propiedades
        private $url;
        private $pesoenkb;
    }
    
    $producto1 = new ProductoFisico("Zapatillas","Zapatillas deportivas de color blanco",50);
    echo $producto1->dimePrecio();
    echo "<br>";
    echo $producto1->dimeNombre();
    echo "<br>";
    var_dump($producto1->dameDatos());
?>