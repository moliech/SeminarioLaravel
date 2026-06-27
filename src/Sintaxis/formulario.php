<?php
$mensaje = "";
$nombre_mostrado="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Validacion Basica
    if(!empty($_POST["nombre"]) && !empty($_POST ["email"])&& !empty($_POST ["telefono"])) {
        $nombre_mostrado = htmlspecialchars($_POST["nombre"]);
        $mensaje = "Bienvenido, " . $nombre_mostrado . "!";
    }else {
        $mensaje = "Todos los campos son obligatorios.";
    }

    if (is_numeric($_POST["telefono"])) {
        $mensaje .= " Telefono válido.";
    } else {
        $mensaje .= " El teléfono debe ser numérico.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h2>Registro Rapido</h2>
    <p style="color:blue;"><?php echo $mensaje; ?></p>
    <form method="POST" action="">
        <label>Nombre: <input type="text" name="nombre"></label><br><br>
        <label>Email: <input type="email" name="email"></label><br><br>
        <label>Telefono: <input type="text" name="telefono"></label><br><br>
        <button type="submit">Enviar</button>
    </form>
    <p><strong>Comparativa:</strong> Prueba cambiando <code>method="GET"</code> y observa la URL.</p>
</body>    
</html>