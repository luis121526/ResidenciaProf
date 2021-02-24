<?php
include '../Conexionbd/Conexion.php';
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$query1="SELECT *FROM usuarios WHERE nombreusuario='$usuario' AND contra='$contra'";
$validacion=mysqli_query($conexion,$query1);
$nr=mysqli_fetch_row($validacion);

if(empty($usuario) || empty($contra)){
    echo "<script>
    alert('No puedes dejar campos vacios');
    location.href='../index.html';
    </script>";
}
if ($nr>0){
    session_start();
    $_SESSION['usuario']=$usuario;
    echo "<script>
    location.href='../Vistas/Dashboard.php';
    </script>";
}
else{
    echo "<script>
    alert('Usuario o contraseña incorrectos');
    location.href='../index.html';
    </script>";
}



?>