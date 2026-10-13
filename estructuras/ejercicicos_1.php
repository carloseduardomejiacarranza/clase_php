<?php
/*
 * EJERCICIO 1
 *
 * ---------------------------
 *
 * Crea un programa en PHP que controle el acceso de una persona a un gimnasio.
 * El programa debe tener las siguientes variables:
 * - Nombre de la persona
 * - Edad
 * - Típo de membresía (basic, premium o vip)
 * - Si tiene la cuota pagada
 * - Hora actual
 *
 * El programa debe de comprobar
 * 1. La persona debe tener al menor 16 años
 * 2. Debe tener la cuota pagada


 * 3. Si la membresía es basic, solamente puede acceder entre las 08:00 y las 18:00
 * 4. Si es premium puede acceder entre las 07:00 y las 21:00.
 * 5. Si es vip, puede acceder durante todo el horario de apertura, de 06:00 a 23:00
 *
 * Si puede acceder, muestra un mensaje indicando su nombre y tipo de membresía.
 * S no puede acceder, muestra el motivo por el que se le ha denegado el acceso.
 *
 * Condición: Utiliza operadores lógicos para combinar las diferentes condiciones
 *
 * */


echo "<h2 class='mb-3'>GYM: TU FORMA, TU DESICION</h2>";
$nombre = "Eduardo Mejia";
$edad = 28;
$tipoMembresia = "premium";
$cuotaPagada = true;
$horaActual = "15:30";

$edad_permitida = $edad >= 16;

if ($tipoMembresia == "basic") {
    $horario_permitido = $horaActual >= "08:00" && $horaActual <= "18:00";
}
elseif ($tipoMembresia == "premium") {
    $horario_permitido = $horaActual >= "07:00" && $horaActual <= "21:00";
}
elseif ($tipoMembresia == "vip") {
    $horario_permitido = $horaActual >= "06:00" && $horaActual <= "23:00";
} else {
    $horario_permitido = false;
}

if ($edad_permitida && $cuotaPagada && $horario_permitido) {
    echo "Acceso permitido. <br><br> Bienvenido/a $nombre, membresía $tipoMembresia.";


} else {
    echo "Acceso denegado para $nombre.";
    echo "<br>";

    if ($edad_permitida) {
        echo "No tienes la edad mínima (16 años).";
        echo "<br>";
    }
    if ($cuotaPagada) {
        echo "La cuota no está pagada.";
        echo "<br>";
    }
    if ($horario_permitido) {
        echo "Estás fuera del horario permitido para tu membresía.";
        echo "<br>";
    }
}



/*
 * EJERCICIO 2
 *
 * ---------------------------
 *
 * Una tienda online quiere determinar las condiciones de envío de un pedido.
 *
 * Crea las siguientes variables:
 * - Nombre del cliente
 * - Importe de la compra
 * - Si el cliente es miembro (true / false)
 * - Código de descuento introducido por el cliente (esto hacedlo manual)
 *
 * El programa debe de aplicar las siguientes reglas
 *
 * Envío:
 * 1. Si la compra es igual o superior a PRECIO_ENVIO (el valor es 100), el envío es gratuito
 * 2. Si es inferior a PRECIO_ENVIO, el envío cuesta 6.90€.
 * 3. Si el cliente es miembro, no tendrás en cuenta el PRECIO_ENVIO y el envío siempre será gratuito.
 *
 * Descuento:
 *  Si el código introducido es.
 * - "WELCOME10"            -> 10% de descuento
 * - "VIP20"                -> 20% de descuento
 * - "SUMMER15"             -> 15% de descuento
 * - Cualquier otro código


 * - Cualquier otro código  -> sin descuento
 * - Si no se introduce ningún código, debe de utilizarse un valor por defecto haciendo uso de ??.
 *
 * El programa debe de mostrar (Ejemplo de salida):
 * - Cliente: Carlos
 * - Compra: 125€
 * - Código de descuento: VIP20
 * - Descuento: 20%
 * - Coste del envío: 0€
 * - Total: 100€
 *
 *
 * IMPORTANTE: Primero se aplica el descuento y después se calcula el envío
 * */


echo "<br>";
echo "<h2 class='mb-3'>TU TIENDA DE CONFIANZA</h2>";
$cliente = "Carlos";
$importe = 150;
$miembro = true;
$codigo_descuento = "WELCOME10";
$codigo_descuento = $codigo_descuento ?? "";
$PRECIO_ENVIO = 100;
$coste_envio = 6.90;
$descuento = 0;


if ($codigo_descuento === "WELCOME10") {
    $descuento = $importe * 0.10;
} elseif ($codigo_descuento === "VIP20") {
    $descuento = $importe * 0.20;
} elseif ($codigo_descuento === "SUMMER15") {
    $descuento = $importe * 0.15;
} else {
    $descuento = 0;
}


$importe_con_descuento = $importe - $descuento;

if ($miembro) {
    $coste_envio = 0;
} else {
    if ($importe_con_descuento >= $PRECIO_ENVIO) {
        $coste_envio = 0;
    }
}

$total = $importe_con_descuento + $coste_envio;

echo "Cliente: $cliente";
echo "<br>";
echo "Compra: $importe €";
echo "<br>";
echo "Código de descuento: $codigo_descuento";
echo "<br>";
echo "Descuento aplicado: " . ($descuento > 0 ? ($descuento / $importe * 100) . "%" : "0%") . "";
echo "<br>";
echo "Coste del envío: $coste_envio €";
echo "<br>";
echo "Total: $total €";
echo "<br>";


?>
