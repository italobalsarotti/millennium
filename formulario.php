<?php

include 'conexion.php';

$c= new conectar();
$conexion=$c->conexion();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$query="INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`) VALUES (NULL, '$nombre', '$apellido')";

$respuesta=mysqli_query($conexion,$query);

if ($respuesta) {
	echo json_encode(1);
}else {
	echo json_encode(0);
}


?>