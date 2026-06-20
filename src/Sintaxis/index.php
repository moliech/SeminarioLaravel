<?php
//1. Variables y Strings
$nombre = "Esteban";
$edad = 32;
$ciudad = "Cartago";
$carrera = "Ingeniería en Sistemas";
$semestre = 6;
$materia = "Programación Web";

//2. Concatenacion y mostrar en Html
echo "<h1>Mi presentación</h1>";
echo "<p>Hola, mi nombre es <strong>$nombre</strong>, tengo $edad años y vivo en $ciudad y estudio $carrera.</p>";
echo "<p>Actualmente estoy en el semestre $semestre y mi materia favorita es $materia.</p>";

//3. Diferencia entre comillas simples y dobles
echo '<p>Con comillas simples: $nombre no se interpreta</p>';

?>