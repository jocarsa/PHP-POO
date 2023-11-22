Esta clase `Cliente` representa un modelo básico para almacenar información de un cliente. Aquí hay una explicación detallada:

### Atributos privados

- `$nombre`, `$apellidos`, `$email` y `$telefono`: Son atributos privados de la clase `Cliente` que almacenan la información asociada con un cliente (nombre, apellidos, dirección de correo electrónico y número de teléfono). Al ser privados, estos atributos solo pueden ser accedidos y modificados desde dentro de la propia clase `Cliente`.

### Método constructor

- `__construct($nombre, $apellidos, $email, $telefono)`: Este es el constructor de la clase `Cliente`. Se ejecuta automáticamente cada vez que se crea una nueva instancia de `Cliente`. Recibe como parámetros el nombre, apellidos, email y teléfono del cliente y asigna estos valores a los atributos correspondientes de la clase utilizando la notación `$this->atributo = valor`.

### Encapsulamiento

- Los atributos de la clase `Cliente` están declarados como privados (`private`), lo que significa que no se pueden acceder directamente desde fuera de la clase. Esto ayuda a proteger la integridad de los datos, ya que se evita que otros segmentos del código modifiquen directamente los valores de los atributos.

### Uso de la clase `Cliente`

Esta clase proporciona una estructura básica para representar y almacenar la información de un cliente en una aplicación. Para utilizar esta clase, se pueden crear objetos `Cliente` con los datos de un cliente específico:

```php
// Creación de un objeto Cliente
$cliente1 = new Cliente("Juan", "Gómez", "juan@example.com", "123456789");
```

Esto crea un nuevo objeto `Cliente` con el nombre "Juan", apellidos "Gómez", correo electrónico "juan@example.com" y número de teléfono "123456789".

En resumen, la clase `Cliente` define un modelo simple para almacenar información relacionada con un cliente y ofrece la capacidad de crear objetos `Cliente` con datos específicos mediante el constructor.