El archivo de funciones (`funciones.php`) contiene una serie de funciones que realizan tareas específicas relacionadas con la gestión del carrito de compras y la visualización de productos en la tienda en línea. Aquí están las novedades en cada una de las funciones:

1. **Función `listadoProductos()`**:
   - Esta función muestra el listado de productos disponibles en la tienda. No presenta novedades significativas desde la última revisión.

2. **Función `crearCarritoSiNoExiste()`**:
   - Verifica si no existe un carrito en la sesión actual (`$_SESSION['carrito']`). Si no existe, crea un nuevo carrito (`new Carrito()`) y lo almacena en la sesión.
   - Permite asegurar la existencia del carrito en la sesión antes de cualquier interacción con él.

3. **Función `anadirProductoAlCarrito()`**:
   - Esta función se encarga de añadir un producto al carrito si se recibe el parámetro `$_GET['p']`.
   - Decodifica el parámetro `$_GET['p']`, que contiene información del producto en formato JSON codificado en base64, y añade un nuevo objeto `ProductoFisico` al carrito con la información proporcionada en ese parámetro.

4. **Función `mostrarCarrito()`**:
   - Esta función muestra el contenido del carrito de compras.
   - Genera una tabla que lista los productos en el carrito con sus respectivos nombres, descripciones, precios y muestra el total del carrito.

### Resumen:

Las novedades en las funciones se centran en la modularización de tareas relacionadas con el carrito y los productos. Se han creado funciones específicas para crear el carrito si no existe, añadir productos al carrito y mostrar el contenido del carrito, lo que mejora la organización y legibilidad del código. Además, se han mantenido las funcionalidades previas para mostrar el listado de productos disponibles en la tienda.