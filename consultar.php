<?php

include("datos.php");
$mensaje = "";

if ($_POST) {
    $tipo = array_key_exists('tipo', $_POST) ? $_POST['tipo'] : null;
    $dato = array_key_exists('dato', $_POST) ? $_POST['dato'] : null;
    $mensaje = consulta($tipo,$dato);
}

echo "<form method='post' action='consultar.php'>";
echo "<br><h1>CONSULTAS DE PERSONAS</h1><br><br>";
echo "<label>Tipo de dato: </label><select name='tipo'>";
echo "<option value=1>Nombre</option>";
echo "<option value=2>Apellido</option>";
echo "<option value=3>Cedula</option>";
echo "<option value=4>Todos los datos</option>";
echo "</select><br><br>";
echo "<label>Dato: </label><input name='dato'></input><br><br>";
echo "<label>".$mensaje."<br></label>";
echo "<input type='submit' value='Consultar'></input>";
echo "</form>";

echo "<form action='index.php'>";
echo "<input type='submit' value='Ir a Inicio'></input>";
echo "</form>";

echo "<form action='registro.php'>";
echo "<input type='submit' value='Ir a Registro'></input>";
echo "</form>";

?>