<?php
    class Producto{
        // Propiedades
        private $precio;
        private $nombre;
        private $descripcion;
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
        public function ponNombre($nuevo_nombre){
            $this->nombre = $nuevo_nombre;
        }
        public function dimeNombre(){
            return $this->nombre;
        }
        public function ponDescripcion($nueva_descripcion){
            $this->descripcion = $nueva_descripcion;
        }
        public function dimeDescripcion(){
            return $this->descripcion;
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
        // Método constructor
        public function __construct($nombre,$descripcion,$precio,$anchura,$altura,$profundidad,$peso){
            $this->ponNombre($nombre);
            $this->ponDescripcion($descripcion);
            $this->ponPrecio($precio);
            $this->anchura = $anchura;
            $this->altura = $altura;
            $this->profundidad = $profundidad;
            $this->peso = $peso;
        }
        public function dameDatos(){
            return [
                $this->dimeNombre(),
                $this->dimeDescripcion(),
                $this->dimePrecio(),
                $this->anchura,
                $this->altura,
                $this->profundidad,
                $this->peso
            ];
        }
    }
    class ProductoVirtual extends Producto{
        // Propiedades
        private $url;
        private $pesoenkb;
        // Método constructor
        public function __construct($nombre,$descripcion,$precio,$url,$pesoenkb){
            $this->ponNombre($nombre);
            $this->ponDescripcion($descripcion);
            $this->ponPrecio($precio);
            $this->url = $url;
            $this->pesoenkb = $pesoenkb;
        }
        public function dameDatos(){
            return [
                $this->dimeNombre(),
                $this->dimeDescripcion(),
                $this->dimePrecio(),
                $this->url,
                $this->pesoenkb
            ];
        }
    }
    
    $producto1 = new ProductoFisico("Zapatillas","Zapatillas deportivas de color blanco",50,10,10,10,5);
    var_dump($producto1->dameDatos());
    $producto2 = new ProductoVirtual("Manual de usuario","Manual en PDF",20,"https://josevicentecarratala.com/descarga.pdf",500);
    var_dump($producto2->dameDatos());
?>