Las novedades en este archivo `index.php` se centran en la modularización del código a través de la creación de funciones específicas para manejar el carrito y los productos.

### Explicación de las novedades:

1. **Funciones para la gestión del carrito y los productos**:
   - `crearCarritoSiNoExiste()`: Esta función verifica si no existe un carrito en la sesión actual (`$_SESSION['carrito']`). En caso de que no exista, crea un nuevo carrito (`new Carrito()`) y lo guarda en la sesión.
   
   - `anadirProductoAlCarrito()`: Esta función se encarga de añadir un producto al carrito si se recibe el parámetro `$_GET['p']`. Similar a la lógica previamente descrita en versiones anteriores del código, decodifica y añade el producto al carrito si se proporciona mediante la URL (`$_GET['p']`).
   
   - `mostrarCarrito()`: Esta función se encarga de mostrar el contenido del carrito en la página. En versiones anteriores, este código se insertaba directamente en el archivo `index.php`. Ahora se ha modularizado, probablemente para mejorar la organización y legibilidad del código.

2. **Uso de funciones para organizar la lógica**:
   - El código se ha reestructurado utilizando funciones específicas (`crearCarritoSiNoExiste()`, `anadirProductoAlCarrito()`, `mostrarCarrito()`) para manejar tareas específicas relacionadas con el carrito y los productos. Esto ayuda a modularizar el código y a mejorar su mantenibilidad al separar la funcionalidad en bloques lógicos más pequeños y reutilizables.

### Resumen:

Las novedades principales son la creación de funciones específicas para manejar diferentes aspectos del carrito y los productos, lo que ayuda a organizar y modularizar el código para mejorar su mantenibilidad y legibilidad.