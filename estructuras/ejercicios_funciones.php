<?php
echo "<h1>EJERCICIOS</h1>";
/*
 *
 * Ejercicio 1
 * ------------------------------
Crear un array CLAVE-VALOR que se llame productos. Este elemento tendrá dentro arrays. Cada array interno tendrá una estructura id, name, price, stock, category. Mínimo 5 items.

Luego, crea otro array llamado carrito. Este array tendrá otros arrays internos. Cada array interno tendrá lo siguiente:

$cart = array(
    ["product_id" => 1, "qty" => 2],
    ["product_id" => 2, "qty" => 5],
    ["product_id" => 3, "qty" => 1],
);

- listar el contenido de productos.

- listar productos sin stock.

- listar solo los productos (info de productos) que estén añadidos en el carrito (cart).

- Listar el nombre y el precio total a pagar de los productos que estén en el carrito.
*/

// array_values() => transforma un array de clave - valor, a un array normal.
// En el caso de productos que es un array clave - valor (array) se transformaría en array de arrays.

$productos = array(
    1 => ["id" => 1, "name" => "Camiseta", "price" => 19.99, "stock" => 5, "category" => "Ropa"],
    2 => ["id" => 2, "name" => "Pantalón", "price" => 39.99, "stock" => 0, "category" => "Ropa"],
    3 => ["id" => 3, "name" => "Zapatillas", "price" => 59.99, "stock" => 10, "category" => "Calzado"],
    4 => ["id" => 4, "name" => "Mochila", "price" => 29.99, "stock" => 0, "category" => "Accesorios"],
    5 => ["id" => 5, "name" => "Gorra", "price" => 14.99, "stock" => 20, "category" => "Accesorios"],
);

$cart = array(
    ["product_id" => 1, "qty" => 2],
    ["product_id" => 2, "qty" => 5],
    ["product_id" => 3, "qty" => 1],
);

function imprimir_producto($producto): void
{
    echo "<p>ID: " . $producto['id'] . ", Nombre: " . $producto['name'] . ", Precio: " . $producto['price'] . ", Stock: " . $producto['stock'] . ", Categoría" . $producto['category'] . "</p>";
}

echo "<h2>EJERCICIO 1</h2>";

echo "<h3>Listar todos los productos</h3>";
foreach ($productos as $clave => $valor) {
    imprimir_producto($valor);
}
echo "<br>";

echo "<h3>Listar productos sin stock</h3>";
foreach ($productos as $clave => $valor) {
    if ($valor['stock'] <= 0) {
        imprimir_producto($valor);
    }
}
echo "<br>";


echo "<h3>Listar productos añadidos al carrito</h3>";
$cont = 0;
foreach ($cart as $c) {
    $id_carrito = $c["product_id"];
    foreach ($productos as $clave => $valor) {
        if ($valor['id'] === $id_carrito) {
            imprimir_producto($valor);
            $cont++;
        }
    }
}
if ($cont === 0) {
    echo "No hay productos en el carrito";
}
echo "<br>";


echo "<h3>Listar nombre y precio total * producto</h3>";
$cont_suma = 0;
foreach ($cart as $c) {
    $id_carrito = $c["product_id"];
    foreach ($productos as $clave => $valor) {
        if ($valor['id'] === $id_carrito) {
            echo "<p>Nombre: " . $valor["name"] . ", Precio total: " . ($valor["price"] * $c["qty"]) . "€ </p>";
        }
    }
}
echo "<br>";

/*
 *
 * Ejercicio 2
 * ------------------------------
Tenemos un array llamado $users o $usuarios. este array es bidimensional. La estructura de los arrays internos
tiene username, password, role (ADMIN o USER), isActive (true o false).

cuando Pongáis el isActive ponedlo como json_encode(true o false).

Cread una variable array, que tendrá username y un password.

    - Comprobar si el usuario existe en nuestra bbdd ($users). Si no existe al final de toda la comprobación habrá que poner un mensaje que diga "Usuario no existe".
    - Si existe, y la contraseña es incorrecta, poned "Contraseña incorrecta".
    - Si todo coincide, poned "Bienvenido [USERNAME]. Rol [ROL]".
    - Luego crear un array unidimensional, cuya posición 0 sea "Acceso total", la posición 1 será "Acceso limitado".
 *
 * */

$usuarios = array(
    ["username" => "admin", "password" => "admin", "role" => "ADMIN", "isActive" => json_encode(true)],
    ["username" => "camilo", "password" => "1234", "role" => "ADMIN", "isActive" => json_encode(false)],
    ["username" => "pepe", "password" => "4567", "role" => "USER", "isActive" => json_encode(true)],
    ["username" => "juan", "password" => "admin", "role" => "USER", "isActive" => json_encode(false)],
);

echo "<h2>EJERCICIO 2</h2>";

echo "<h3>Comprobar si el usuario existe en nuestra bbdd</h3>";
$datos = ["usr" => "admin", "passwd" => "admin"];

$encontrado = false;
$cont_ej2 = 0;

while (!$encontrado && $cont_ej2 < count($usuarios)) {
    if ($usuarios[$cont_ej2]["username"] == $datos['usr']) {
        if ($usuarios[$cont_ej2]["password"] === $datos['passwd']) {
            echo "<p>Bienvenido " . $usuarios[$cont_ej2]['username'] . ". Rol " . $usuarios[$cont_ej2]['role'] . "</p>";
        } else {
            echo "<p>Contraseña incorrecta</p>";
        }
        $encontrado = true;
    }
    $cont_ej2++;
}

if (!$encontrado) {
    echo "<p>El usuario no existe</p>";
}



echo json_encode(true);


