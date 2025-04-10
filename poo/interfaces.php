<?php
// Las interfaces son una forma de asegurar que ciertas clases adhieran a un contrato especifico de metodos. Una interfaz define metodos no implementados que las clases deben implementar. Esto permite que diferentes clases puedan ser tratadas de manera uniforme si implementan la misma interfaz.

// Ejemplo: Crear un sistema de gestion de pagos, en el que distintas formas de pago (tarjeta de credito, PayPal, transferencia bancaria) deben ser implementadas. Podemos crear una interfaz porque todas las formas de pago deben tener un metodo de procesar pago, pero la implementacion puede variar. Esto permite que el sistema sea flexible y extensible, ya que se pueden agregar nuevas formas de pago sin modificar el codigo existente.

// Todas las clases tendran un metodo pagar() que sera implementado de manera diferente en cada clase. Esto permite que el sistema sea flexible y extensible, ya que se pueden agregar nuevas formas de pago sin modificar el codigo existente.

// Las interfaces deben tener metodos publicos, y no pueden tener propiedades. Las clases que implementan la interfaz deben implementar todos los metodos definidos en la interfaz. Define funciones, pero no el como se van a implementar (eso lo hace la clase que implementa la interfaz).

// Se usa la palabra reservada "interface" para definir una interfaz, y la palabra implement para indicar que una clase implementa una interfaz. Y al hacerlo, la clase esta OBLIGADA a implementar todos los metodos definidos en la interfaz.

interface Pago {
    public function procesarPago($monto);
}

class PagoTarjeta implements Pago {

    public function procesarPago($monto)
    {
        echo "Procesando el pago de {$monto} mediante Tarjeta de Crédito<br>";
    }
}

class PagoPaypal implements Pago {

    public function procesarPago($monto)
    {
        echo "Procesando el pago de {$monto} mediante PayPal<br>";
    }
}

class PagoBitcoin implements Pago {

    public function procesarPago($monto)
    {
        echo "Procesando el pago de {$monto} mediante Bitcoin<br>";
    }
}

$tarjeta = new PagoTarjeta();
$paypal = new PagoPaypal();
$bitcoin = new PagoBitcoin();

$tarjeta->procesarPago(200);
$paypal->procesarPago(300);
$bitcoin->procesarPago(400);
?>