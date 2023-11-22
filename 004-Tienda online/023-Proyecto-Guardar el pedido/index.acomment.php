Las novedades en este archivo `index.php` con respecto a la versión anterior son:

1. **Almacenamiento del Pedido en un Archivo JSON**:
   - Después de procesar el pedido en la sección `'procesapedido'`, se crea un nuevo objeto `Cliente` con la información proporcionada en el formulario.
   - Posteriormente, se añade este cliente al carrito utilizando `$_SESSION['carrito']->anadirCliente($nuevocliente)`.
   - Luego se utiliza `json_encode()` para convertir el carrito completo, incluyendo el cliente y los productos, en una cadena JSON legible con `JSON_PRETTY_PRINT`.
   - La cadena JSON resultante se guarda en un archivo en la carpeta 'pedidos' con un nombre basado en la marca de tiempo actual para asegurar su unicidad: `"pedidos/" . date('U') . ".json"`.
   - Finalmente, se destruye la sesión con `session_destroy()`, lo que vacía el carrito y cierra la sesión del usuario.

2. **Almacenamiento del Pedido en un Archivo de Pedidos**:
   - Se implementa la funcionalidad de guardar el carrito y los detalles del cliente en un archivo JSON, asegurando que los datos del pedido se conserven incluso después de cerrar la sesión.

3. **Resto de la lógica se mantiene similar a la versión anterior**:
   - Se añaden productos al carrito y se muestran en la sección del carrito.
   - Se incluyen las plantillas de cabecera y pie de página.
  
Estas modificaciones introducen una funcionalidad nueva y significativa al guardar los detalles del pedido en un archivo JSON con información detallada del carrito y el cliente, permitiendo registrar y conservar los datos del pedido incluso después de cerrar la sesión del usuario.