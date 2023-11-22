Las novedades en el archivo de funciones en comparación con la versión anterior son:

1. **Adición de Nuevas Funciones**:
    - Se agregaron tres nuevas funciones: `formularioCliente()`, `enviaPedido()`, y se dividió la lógica en el archivo de funciones para hacer el código más modular y más fácil de mantener.
    
2. **Separación de Responsabilidades**:
    - `formularioCliente()`: Esta función muestra un formulario para que el usuario ingrese los datos del cliente cuando se accede a la página con `?pagina=datoscliente`.
    - `enviaPedido()`: Se encarga de procesar el pedido después de que el usuario ha ingresado los datos del cliente y ha enviado el formulario. Al acceder a la página con `?pagina=procesapedido`, se ejecuta esta función, la cual muestra un mensaje confirmando el procesamiento del pedido y crea un archivo JSON con los detalles del pedido en la carpeta "pedidos". Luego, destruye la sesión y redirige a la página principal después de 5 segundos.

Estas funciones adicionales ayudan a separar las responsabilidades del código, facilitando la comprensión y el mantenimiento del flujo del programa.