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
    if(!isset($_GET['pagina'])){
        listadoProductos();
    }else{
        if($_GET['pagina'] == 'datoscliente'){
            echo '<h4>Datos del cliente</h4>
            <form method="POST" action="?">
                <input type="text" name="nombre">
                <input type="text" name="apellidos">
                <input type="text" name="email">
                <input type="text" name="telefono">
                <input type="submit">
            </form>
            ';
        }
    }
    
    mostrarCarrito();

    include "plantilla/piedepagina.php";
?>