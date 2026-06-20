<?php
require_once 'Producto.php';

//Instanciar (crear ibjetos)
$prod1=new Producto("Laptop Gamer", 1500, 0.19, "Electrónica"); //Todos los parametros
$prod2=new Producto("Mouse inalámbrico", 80, 0.19, "Electrónica"); 
$prod3=new Producto("Monitor 4K", 400, 0.19, "Electrónica"); //IVA personalizado
$prod4=new Producto("Teclado mecánico", 120, 0.19, "Oficina"); //Categoría
$prod5=new Producto("Teléfono móvil", 200, 0.19, "Electrónica"); //Categoria


echo "<h2>Catalogo POO</h2>";
echo "<ul>";
echo "<li>".$prod1->getInfo()."</li>";
echo "<li>".$prod2->getInfo()."</li>";
echo "<li>".$prod3->getInfo()."</li>";
echo "<li>".$prod4->getInfo()."</li>";
echo "<li>".$prod5->getInfo()."</li>";
echo "</ul>";
?>