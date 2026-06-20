<?php
//Array indexado (numerico)
$frutas = ["Manzana", "Banana", "Cereza", "Durazno", "Fresa"];
echo "La segunda fruta es: " . $frutas[1] . "<br>";

//Array asociativo (clave=>valor) - muy usado en JSON/APIs
$producto = [
    "Laptop" => 1200,
    "Mouse" => 25,
    "Teclado" => 45,
    "Monitor" => 300
];

echo "<h2>Lista de productos</h2>";
echo "<ul>";
$total = 0;

foreach ($producto as $nombre => $precio) {
    echo "<li>$nombre: $$precio</li>";
    $total += $precio;
}

$totalConIVA = $total * 1.19;

echo "</ul>";
echo "<p><strong>Total sin IVA: $$total</strong></p>";
echo "<p><strong>Total con IVA: $$totalConIVA</strong></p>";
?>