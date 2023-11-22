<?php
    include "Clases/Producto.php";
    include "Clases/Carrito.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";

    $carrito = new Carrito();

    $carrito->anadirCliente(new Cliente("Jose Vicente","Carratalá Sanchis","info@josevicentecarratala.com","12345"))

    $carrito->anadirProducto(new ProductoFisico("Zapatillas","Zapatillas deportivas de color blanco",50,10,10,10,5));
    $carrito->anadirProducto(new ProductoFisico("Zapatillas 2","Zapatillas deportivas de color azul",50,10,10,10,5));
    
    echo $carrito->sumarTotal();
?>