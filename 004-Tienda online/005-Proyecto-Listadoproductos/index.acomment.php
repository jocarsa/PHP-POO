Este código presenta varias novedades en comparación con las versiones anteriores:

### Inclusión de archivos de clases

Se están incluyendo los archivos de las clases necesarias (`Producto.php` y `Carrito.php`) mediante `include`. Esto permite que el archivo principal acceda a las definiciones de las clases `Producto` y `Carrito`.

### Creación de un objeto `Carrito` y manipulación de productos

1. **Creación de un objeto `Carrito`**: Se instancia un objeto `$carrito` de la clase `Carrito` mediante `new Carrito();`.

2. **Añadir productos al carrito**: Se utilizan los métodos `anadirProducto()` del objeto `$carrito` para añadir instancias de `ProductoFisico` al carrito de compras. En este caso, se añaden dos instancias de `ProductoFisico` con diferentes detalles (zapatillas blancas y azules).

### Uso de `var_dump()`

Se utiliza `var_dump()` para imprimir el resultado de invocar el método `listarProductos()` del objeto `$carrito`. Esto imprimirá la estructura y los detalles de los productos almacenados en el carrito.

### Visualización de los productos del carrito

En lugar de intentar acceder directamente al atributo `$productos` del carrito, se usa el método `listarProductos()` para obtener una lista de los productos del carrito de manera segura. `var_dump()` muestra la información completa de los productos almacenados en el carrito.

### Resumen

Este código muestra cómo se crean instancias de la clase `Carrito` y se agregan productos utilizando el método `anadirProducto()`. Luego, se utiliza `var_dump()` junto con el método `listarProductos()` para mostrar la lista completa de productos almacenados en el carrito, demostrando una forma segura de acceder a la información del carrito desde fuera de la clase.