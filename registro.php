<?php

include("datos.php");
$mensaje = "";

if ($_POST) {
    $nombre = array_key_exists('nombre', $_POST) ? $_POST['nombre'] : null;
    $apellido = array_key_exists('apellido', $_POST) ? $_POST['apellido'] : null;
    $cedula = array_key_exists('cedula', $_POST) ? $_POST['cedula'] : null;
    $mensaje = guardar($nombre, $apellido, $cedula);
}

echo "<form method='post' action='registro.php'>";
echo "<br><h1>DATOS DE PERSONAS</h1><br><br>";
echo "<label>Nombre:</label><input type='text' name='nombre' required></input><br><br>";
echo "<label>Apellido:</label><input type='text' name='apellido' required></input><br><br>";
echo "<label>Cedula:</label><input type='text' name='cedula' required></input><br><br>";
echo "<label>".$mensaje."<br></label>";
echo "<input type='submit' value='Almacenar'></input>";
echo "</form>";

echo "<form action='index.php'>";
echo "<input type='submit' value='Ir a Inicio'></input>";
echo "</form>";

echo "<form action='consultar.php'>";
echo "<input type='submit' value='Ir a consultar'></input>";
echo "</form>";

?>