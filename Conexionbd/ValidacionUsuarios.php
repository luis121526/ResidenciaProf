<?php
include '../Conexionbd/Conexion.php';
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$query1="SELECT *FROM usuarios WHERE nombreusuario='$usuario' AND contra='$contra'";
$validacion=mysqli_query($conexion,$query1);
$nr=mysqli_fetch_array($validacion);

if(empty($usuario) || empty($contra)){
    echo "<script>
    alert('No puedes dejar campos vacios');
    location.href='../index.html';
    </script>";
}
if ($nr['id_cargo']==1){//Admin
    session_start();
    $_SESSION['usuario']=$usuario;
    echo "<script>
    location.href='../Vistas/Observaciones.php';
    </script>";
}
if ($nr['id_cargo']==2){//Docente
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