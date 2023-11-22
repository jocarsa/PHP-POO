<?php
    include "Clases/Producto.php";
    include "Clases/Carrito.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";
    
    session_start();
    
    include "inc/funciones.php";
    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = new Carrito();
    }
    if(isset($_GET['p'])){
        $json = json_decode(base64_decode($_GET['p']));
        
        $_SESSION['carrito']->anadirProducto(
            new ProductoFisico(
                $json->nombre,
                $json->descripcion,
                $json->precio,
                $json->longitud,
                $json->anchura,
                $json->altura,
                $json->peso
            )
        );
        
    }
    include "plantilla/cabecera.php";

    listadoProductos();
    
    echo '<aside><h4>Carrito</h4>';
    echo "<table>";
        
        
        foreach($_SESSION['carrito']->listarProductos() as $producto){
         
            echo '
            <tr>
                <td>
                    <h5>'.$producto->dimeNombre().'</h5>
                    <p>'.$producto->dimeDescripcion().'</p>
                </td>
                <td>
                    <p>'.$producto->dimePrecio().' €</p>
                </td>
            </tr>';
        }
    echo '<tr><td>Total</td><td>'.$_SESSION['carrito']->sumarTotal().' €</td></tr>';
    echo "</table>";
    echo '</aside>';

    include "plantilla/piedepagina.php";
?>