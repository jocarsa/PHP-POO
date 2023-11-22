En la función `listadoProductos()`, la novedad reside en la modificación de cómo se codifica la información del producto en la URL del botón "Añadir al carrito".

### Cambios realizados:

1. **Codificación adicional de datos del producto en la URL**:
   - Anteriormente, se utilizaba `json_encode($producto)` para codificar la información del producto en formato JSON. Ahora, esta información se codifica primero utilizando `json_encode($producto)` y luego se aplica una codificación base64 adicional con `base64_encode()`.
   - El resultado de `base64_encode(json_encode($producto))` se incluye en el atributo `href` del enlace `<a>`, que ahora contiene la información del producto codificada en base64.

### Resumen:

La novedad principal es que se ha añadido una capa adicional de codificación utilizando `base64_encode()` a la información del producto antes de incluirla en la URL del botón "Añadir al carrito". Esto puede tener como objetivo mejorar la seguridad o la manipulación de datos en la URL, aunque depende del contexto y los requerimientos específicos de la aplicación.