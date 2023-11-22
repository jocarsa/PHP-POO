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
           formularioCliente();
        }else if($_GET['pagina'] == 'procesapedido'){
            enviaPedido();
        }
    }
    
    mostrarCarrito();

    include "plantilla/piedepagina.php";
?>