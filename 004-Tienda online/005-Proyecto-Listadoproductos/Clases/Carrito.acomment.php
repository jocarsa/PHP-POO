Este código presenta algunas novedades en comparación con la versión previa de la clase `Carrito`. Aquí están las actualizaciones:

### Nuevo método `listarProductos()`

Se ha agregado un nuevo método público llamado `listarProductos()`. Este método permite acceder a la lista de productos almacenados en el carrito devolviendo el atributo `$productos`.

- **`listarProductos()`**: Este método devuelve el arreglo de productos almacenados en el carrito. Al ser un método público, puede ser invocado desde fuera de la clase para obtener la lista de productos que han sido añadidos al carrito.

### Funcionamiento del método `listarProductos()`

- El método `listarProductos()` simplemente retorna el atributo privado `$productos`, proporcionando acceso a los productos almacenados en el carrito sin exponer directamente el atributo como público.

### Uso del método `listarProductos()`

Cuando se necesite obtener la lista de productos de un carrito específico, se puede utilizar este método para recuperar el arreglo de productos y utilizar esa información según sea necesario en el contexto de la aplicación.

### Cambios en la funcionalidad de la clase `Carrito`

Con la inclusión del método `listarProductos()`, la clase `Carrito` ahora proporciona una forma más segura y controlada de acceder a los productos almacenados dentro de un carrito sin exponer directamente su atributo privado `$productos`. Esto mejora la encapsulación de la clase, manteniendo el control sobre el acceso a los datos internos.