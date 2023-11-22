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

function formularioCliente(){
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
}
function enviaPedido(){
    echo "<h4>Tu pedido se ha procesado correctamente</h4>";
            $nuevocliente = new Cliente(
                $_POST['nombre'],
                $_POST['apellidos'],
                $_POST['email'],
                $_POST['telefono']
            );
            $_SESSION['carrito']->anadirCliente($nuevocliente);
            $cadena = json_encode($_SESSION['carrito'], JSON_PRETTY_PRINT);
            
            file_put_contents("pedidos/".date('U').".json",$cadena);
            session_destroy();
            echo "<p>Redirigiendo en 5 segundos...</p>";
            header("refresh:5;url=?");
}
?>