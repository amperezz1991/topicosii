<?php

$persona = array(
		array('nombre'=>'Angela', 'apellido'=>'Pérez', 'cedula'=>'1054992688'),
		array('nombre'=>'Maria', 'apellido'=>'Zapata', 'cedula'=>'1234567890')
	);

function guardar($nombre, $apellido, $cedula){
	global $persona;
	$tam1 = count($persona);
	$datos = array('nombre'=>$nombre, 'apellido'=>$apellido, 'cedula'=>$cedula);
	array_push($persona, $datos);
	$tam2 = count($persona);
	if ($tam2>$tam1) {
		return "Almacenado con exito";
	}else{
		return "Tuvimos un error por favor intenta mas tarde";
	}
}

function consulta($tipo, $dato){
	global $persona;
	$llave="";
	$datos="<h2>Resultado de los datos consultados</h2>";
	switch ($tipo) {
		case 1:
			$llave = "nombre"; break;
		case 2:
			$llave = "apellido"; break;
		case 3:
			$llave = "cedula"; break;
		case 4:
			foreach ($persona as $key) {
				$datos.="Nombre:".$key['nombre'].", Apellido:".$key['apellido'].", Cedula:".$key['cedula']."<br>";
			}
			break;
		default:
			break;
	}
	if ($tipo!==4) {
		foreach ($persona as $key) {
			if(strtolower($key[$llave])===strtolower($dato)){
				$datos.="Nombre:".$key['nombre'].", Apellido:".$key['apellido'].", Cedula:".$key['cedula']."<br>";
			}
		}
	}
	return $datos;
}

?>