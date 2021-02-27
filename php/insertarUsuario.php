<?php

include "./conexion.php";

$nombre= $_POST['nombre'];
$ap= $_POST['ap'];
$reloj= $_POST['reloj'];
$p1= $_POST['p1'];
$p2= $_POST['p2'];
if($p1 != $p2){
    echo "El password es diferente";
    header("Location: ../usuarios.php?error=Los campos no coinciden");
}else{
    $p1=sha1($p1);
   $conexion ->query(" insert into usuarios (nombre, apellido, reloj, password, img_perfil) values 
   ('$nombre' , '$ap',' $reloj',' $p1', 'default.jpg' ) ") or die($conexion ->error);
   header("Location: ../usuarios.php");
}

?>