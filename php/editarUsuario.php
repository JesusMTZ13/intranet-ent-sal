<?php 

  include "./conexion.php" ;
    $nombre=$_POST['nombre'];
    $ap=$_POST['ap'];
    $reloj=$_POST['reloj'];
    $p1=$_POST['p1'];
    $p2=$_POST['p2'];
    $id=$_POST['id'];

    if(trim($p1)==""&& trim($p2) == ""){
    $conexion-> query("update usuarios set 
    nombre='$nombre', 
    apellido='$ap',
    reloj='$reloj' where id=$id")or die($conexion->error);
    header("Location: ../elusuarios.php?success=Actualizado correctamente");


    }else{
            if($p1==$p2){
                $pass=sha1($p1);
                $conexion-> query("update usuarios set 
                nombre='$nombre', 
                apellido='$ap',
                password='$pass' ,
                reloj='$reloj' where id=$id")or die($conexion->error);
                header("Location: ../elusuarios.php?success=Actualizado correctamente");
                
            }else{

                header("Location: ../elusuarios.php?error=Los campos no coinciden");
            }
    }
?>