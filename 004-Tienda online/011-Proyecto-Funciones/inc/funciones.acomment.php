El archivo `funciones.php` contiene una función denominada `listadoProductos()`. Esta función está diseñada para recuperar datos de un archivo JSON de productos, procesarlos y mostrar la información de los productos en formato HTML.

### Explicación de la función `listadoProductos()`:

1. **Lectura de datos desde un archivo JSON**:
   - `file_get_contents("BD/productos.json")`: Lee el contenido del archivo "productos.json" ubicado en la carpeta "BD" y lo guarda en la variable `$productos`.

   - `json_decode($productos)`: Convierte el contenido del archivo JSON almacenado en `$productos` en un objeto PHP para su manipulación. El resultado se almacena en la variable `$json`.

2. **Iteración a través de los datos del archivo JSON**:
   - `foreach($json as $producto) { ... }`: Recorre cada elemento del arreglo `$json`, que contiene la información de los productos del archivo JSON.

   - Dentro del bucle `foreach`, se construye un fragmento HTML para cada producto utilizando las propiedades del objeto JSON.
     - Se utiliza información específica de cada producto, como nombre (`$producto->nombre`), descripción (`$producto->descripcion`), precio (`$producto->precio`) para construir un `<article>` HTML.
     - Se crea un botón "Añadir al carrito" dentro de cada artículo, pero la URL del enlace está vacía (`href=''`). Normalmente, esta URL se llenaría con la lógica necesaria para agregar el producto al carrito.

### Resumen:

El archivo `funciones.php` contiene una función `listadoProductos()` que lee información de un archivo JSON de productos, la convierte a objetos PHP y genera fragmentos HTML para cada producto encontrado en el archivo. Este código permite mostrar una lista de productos con sus detalles en una página web.