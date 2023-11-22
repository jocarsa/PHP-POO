<?php
    include "Clases/Producto.php";
    include "Clases/Carrito.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";

    $productos = file_get_contents("BD/productos.json");
    $json = json_decode($productos);

    foreach($json as $producto){
        echo "<article>
            <h3>".$producto->nombre."</h3>
            <p>".$producto->descripcion."</p>
            <p>".$producto->precio." €</p>
        </article>";
    }
?>