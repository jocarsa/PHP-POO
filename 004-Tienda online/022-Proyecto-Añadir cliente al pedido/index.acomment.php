Las novedades en este archivo `index.php` incluyen la introducción de una lógica adicional basada en el valor de `$_GET['pagina']` para gestionar dos secciones diferentes:

1. **Formulario de Datos del Cliente (`'datoscliente'`)**:
   - Si `$_GET['pagina']` es igual a `'datoscliente'`, se muestra un formulario para recopilar información del cliente, como nombre, apellidos, email y teléfono.
   - El formulario tiene un campo `action="?pagina=procesapedido"` que indica que, al enviar el formulario, se redireccionará a la página con el parámetro `pagina` establecido como `'procesapedido'`.

2. **Procesamiento del Pedido (`'procesapedido'`)**:
   - Si `$_GET['pagina']` es igual a `'procesapedido'`, se procesa el pedido y se muestra un mensaje indicando que el pedido se ha procesado correctamente.
   - Se crea un nuevo objeto `Cliente` con la información proporcionada en el formulario, utilizando los datos del método POST.
   - Se añade el cliente al carrito mediante `$_SESSION['carrito']->anadirCliente($nuevocliente)`.
   - Se utiliza `var_dump($_SESSION['carrito'])` para mostrar los detalles del carrito en el estado actual, lo que ayuda a depurar y verificar los datos almacenados en el carrito.

3. **Resto de la estructura similar a versiones anteriores**:
   - La inclusión de la cabecera, el carrito y el pie de página se mantiene sin cambios (`mostrarCarrito()`, `plantilla/cabecera.php`, `plantilla/piedepagina.php`).

### Resumen:
Se han introducido dos nuevas secciones controladas por el valor de `$_GET['pagina']`: una para recopilar los datos del cliente y otra para procesar el pedido una vez que se han enviado los datos del cliente. Esto permite dividir la lógica en pasos distintos, recopilando la información necesaria del cliente antes de procesar el pedido y añadirlo al carrito de compras.