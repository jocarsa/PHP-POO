Las novedades en este archivo `index.php` con respecto a la versión anterior son:

1. **Refactorización del Código en Funciones**:
   - Se ha introducido la modularización del código en funciones para mejorar la legibilidad y el mantenimiento.
   - Se han reemplazado las secciones de código dentro del condicional `if(!isset($_GET['pagina']))` por llamadas a funciones definidas en el archivo `inc/funciones.php`.
   - Se crearon dos nuevas funciones:
     - `formularioCliente()`: Encapsula el formulario de ingreso de datos del cliente. Al acceder a la página con `?pagina=datoscliente`, se muestra este formulario.
     - `enviaPedido()`: Envía el pedido. Al acceder a la página con `?pagina=procesapedido`, se ejecuta esta función para enviar el pedido.

2. **Utilización de Funciones Definidas en funciones.php**:
   - Se delega la funcionalidad de mostrar el formulario de datos del cliente y enviar el pedido a funciones separadas. Esto facilita el mantenimiento y la comprensión del código al dividirlo en tareas más pequeñas y específicas.

En resumen, se ha refactorizado el código dividiéndolo en funciones separadas (`formularioCliente()` y `enviaPedido()`) para mejorar la legibilidad y el mantenimiento del código en el archivo `index.php`.