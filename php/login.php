<?php
    include "./conexion.php";
    $reloj =$_POST['reloj'];
    $pass =$_POST['pass'];
    $res =$conexion -> query(
        "select * from usuarios where reloj='$reloj'
        and password='".sha1($pass)."' "
    )or die($conexion->error);

    if(mysqli_num_rows($res) >0 ){

    }else{
        echo "Login incorrecto";
    }
    
?>