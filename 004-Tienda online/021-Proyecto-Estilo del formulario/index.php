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
            <form method="POST" action="?pagina=procesapedido">
                <p>Introduce el nombre del cliente</p>
                <input type="text" name="nombre">
                <p>Introduce los apellidos del cliente</p>
                <input type="text" name="apellidos">
                <p>Introduce el email del cliente</p>
                <input type="text" name="email">
                <p>Introduce el telefono del cliente</p>
                <input type="text" name="telefono">
                <input type="submit">
            </form>
            ';
        }else if($_GET['pagina'] == 'procesapedido'){
            echo "<h4>Tu pedido se ha procesado correctamente</h4>";
        }
    }
    
    mostrarCarrito();

    include "plantilla/piedepagina.php";
?>