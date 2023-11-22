Las novedades en este archivo `index.php` se centran en la incorporación del cálculo y la visualización del total de la compra dentro del carrito de compras.

### Explicación de las novedades:

1. **Cálculo y visualización del total del carrito**:
   - Se ha agregado una fila adicional a la tabla del carrito que muestra el total de la compra.
   - Utilizando `$_SESSION['carrito']->sumarTotal()`, se calcula el total de todos los productos en el carrito y se muestra en la última fila de la tabla dentro del apartado del carrito.
   - Se añade una fila adicional en la tabla con dos columnas: una que indica "Total" y otra que muestra el resultado del cálculo del total de la compra, obtenido a través del método `sumarTotal()` del objeto `$_SESSION['carrito']`.

### Resumen:

La novedad principal es la adición de una fila en la tabla del carrito que muestra el total de la compra, calculado sumando los precios de todos los productos presentes en el carrito utilizando el método `sumarTotal()` del objeto `$_SESSION['carrito']`. Esto mejora la experiencia del usuario al proporcionar información sobre el costo total de los productos en el carrito.