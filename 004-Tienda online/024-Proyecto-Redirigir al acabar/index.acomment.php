Las novedades en este archivo `index.php` con respecto a la versión anterior son:

1. **Redirección Automática Después de Procesar el Pedido**:
   - Después de procesar con éxito el pedido en la sección `'procesapedido'`, se muestra un mensaje confirmando que el pedido se ha procesado correctamente: `"<h4>Tu pedido se ha procesado correctamente</h4>"`.
   - Se instancia un nuevo objeto `Cliente` con la información proporcionada en el formulario de datos del cliente.
   - El cliente se añade al carrito mediante `$_SESSION['carrito']->anadirCliente($nuevocliente)`.
   - Se codifica el carrito completo, incluyendo el cliente y los productos, en una cadena JSON con `json_encode($_SESSION['carrito'], JSON_PRETTY_PRINT)`.
   - La cadena JSON resultante se guarda en un archivo en la carpeta 'pedidos' con un nombre basado en la marca de tiempo actual para asegurar su unicidad: `"pedidos/" . date('U') . ".json"`.
   - Se destruye la sesión con `session_destroy()`, lo que vacía el carrito y cierra la sesión del usuario.
   - Se muestra un mensaje indicando que el usuario será redirigido en 5 segundos: `"<p>Redirigiendo en 5 segundos...</p>"`.
   - Se establece una redirección automática a la página principal del carrito mediante el uso del encabezado `header("refresh:5;url=?")`, que redirige a la página principal del carrito después de 5 segundos.

2. **Redirección Automática y Mensaje de Confirmación**:
   - Se agrega la funcionalidad para redirigir automáticamente al usuario a la página principal del carrito después de procesar el pedido con éxito, lo que proporciona una mejor experiencia al usuario y confirma la finalización del pedido.

El código mejora la experiencia del usuario después de realizar un pedido mostrando un mensaje de confirmación y redirigiendo automáticamente a la página principal del carrito después de cierto tiempo, lo que brinda una mejor retroalimentación al usuario.