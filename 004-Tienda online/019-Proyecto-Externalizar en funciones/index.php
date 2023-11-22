<?php
    include "Clases/Producto.php";
    include "Clases/Carrito.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";
    
    session_start();
    
    include "inc/funciones.php";

    crearCarritoSiNoExiste();
    anadirProductoAlCarrito();

    include "plantilla/cabecera.php";

    listadoProductos();
    mostrarCarrito();

    include "plantilla/piedepagina.php";
?>