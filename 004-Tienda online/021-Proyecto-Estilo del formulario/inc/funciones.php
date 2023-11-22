<?php
    function listadoProductos(){
        $productos = file_get_contents("BD/productos.json");
        $json = json_decode($productos);

        foreach($json as $producto){
            echo "<article>
                <h3>".$producto->nombre."</h3>
                <p>".$producto->descripcion."</p>
                <p>".$producto->precio." €</p>
                <a href='?p=".base64_encode(json_encode($producto))."'><button>Añadir al carrito</button></a>
            </article>";
        }
    }
    function crearCarritoSiNoExiste(){
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = new Carrito();
        }
    }
function anadirProductoAlCarrito(){
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
}
function mostrarCarrito(){
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
    echo "<a href='?pagina=datoscliente'><button>Procesar pedido</button></a>";
    echo '</aside>';
}
?>