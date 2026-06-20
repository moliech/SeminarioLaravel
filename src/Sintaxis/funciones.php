<?php
//Definicion de Funcion con parametro por defecto
function calcularPrecioFinal ($precio, $iva=0.19) {
    return $precio * (1 + $iva);
}

//Array de productos sin IVA
$inventario = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45
];

echo "<h2>Precios con IVA</h2>";
foreach ($inventario as $nombre => $precio) {
    $precioFinal = calcularPrecioFinal($precio);

    //Condicional para destacar productos caros
    if ($precioFinal > 100) {
        echo "<p><strong style='color: red;'>$nombre: $$precioFinal (Caro)</strong></p>";
    } else { 
        echo "<p>$nombre: $$precioFinal (Economico)</p>";
    }   
}

echo "</ul>";
echo "</ul>";
echo "</ul>";
echo "<h2>Validacion Edades</h2>";

function esMayorDeEdad($edad) {
    return $edad >= 18;
}

$edades = [12,25,17,30,15];
foreach ($edades as $edad) {
    if (esMayorDeEdad($edad)) {
        echo "<p>La persona con edad $edad es mayor de edad.</p>";
    } else {
        echo "<p>La persona con edad $edad es menor de edad.</p>";
    }
}

?>