Las novedades en este archivo `index.php` se centran en la gestión del carrito de compras y en la visualización de los productos dentro del carrito.

### Explicación de las novedades:

1. **Añadir producto al carrito**:
   - Se verifica si existe un parámetro GET `?p=` en la URL.
   - Si el parámetro está presente, se decodifica la información del producto utilizando `base64_decode()` y `json_decode()`.
   - Posteriormente, se añade un nuevo objeto de la clase `ProductoFisico` al carrito (`$_SESSION['carrito']->anadirProducto()`) utilizando la información proporcionada en el parámetro `$_GET['p']`. Ahora se crea correctamente un objeto `ProductoFisico` utilizando la información decodificada del parámetro.

2. **Visualización detallada del contenido del carrito**:
   - Se muestra una tabla que contiene los detalles de los productos actualmente presentes en el carrito.
   - Se recorre cada producto en el carrito utilizando un bucle `foreach`.
   - Para cada producto, se muestra su nombre, descripción y precio en una fila de la tabla.

### Resumen:

Las novedades radican en la mejora de la lógica para añadir productos al carrito. Además, se ha mejorado la presentación visual del carrito mostrando los detalles de los productos en una tabla, lo que proporciona una vista más organizada y detallada del contenido del carrito de compras.