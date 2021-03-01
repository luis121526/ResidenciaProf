<?php

include "../Conexionbd/Conexion.php";
session_start();
$nombre2=$_SESSION['usuario'];
$nombre=$_POST['nombre'];
$ape=$_POST['apep'];
$ape2=$_POST['apem'];
$fn=$_POST['fn'];
$correo=$_POST['correo'];
$user=$_POST['nu'];
$cont=$_POST['pass'];
/*if(empty($nombre)||empty($ape)||empty($ape2)||empty($fn)||empty($correo)||empty($user)||empty($cont)){
    echo "<script>
    alert('Usted no ha rellenado ningun campo');
    location.href='../Vistas/Datos.php';
    </script>";
}*/
if($nombre){
    $q1=mysqli_query($conexion,"UPDATE usuarios SET nombre='$nombre' WHERE nombreusuario='$nombre2' ");
    echo "<script>
    alert('Cambio Realizado con exito');
    location.href='../Vistas/Datos.php';
    </script>";
}
if($ape){
    $q2=mysqli_query($conexion,"UPDATE usuarios SET apellidop='$ape' WHERE nombreusuario='$nombre2' ");
    echo "<script>
    alert('Cambio Realizado con exito');
    location.href='../Vistas/Datos.php';
    </script>";
}
if($ape2){
    $q3=mysqli_query($conexion,"UPDATE usuarios SET apellidom='$ape2' WHERE nombreusuario='$nombre2' ");
    echo "<script>
    alert('Cambio Realizado con exito');
    location.href='../Vistas/Datos.php';
    </script>";
}
if($fn){
    $q4=mysqli_query($conexion,"UPDATE usuarios SET fechanacimiento='$fn' WHERE nombreusuario='$nombre2' ");
    echo "<script>
    alert('Cambio Realizado con exito');
    location.href='../Vistas/Datos.php';
    </script>";
}
if($correo){
    $q5=mysqli_query($conexion,"UPDATE usuarios SET correo='$correo' WHERE nombreusuario='$nombre2' ");
    echo "<script>
    alert('Cambio Realizado con exito');
    location.href='../Vistas/Datos.php';
    </script>";
}
if($user){
    $q6=mysqli_query($conexion,"UPDATE usuarios SET nombreusuario='$user' WHERE nombreusuario='$nombre2' ");
    echo "<script>
    alert('Cambio Realizado con exito');
    alert('Se cerrará la sesion para aplicar el cambio...');
    location.href='../index.html';
    </script>";
}
if($cont){
    $q7=mysqli_query($conexion,"UPDATE usuarios SET contra='$cont' WHERE nombreusuario='$nombre2' ");
    echo "<script>
    alert('Cambio Realizado con exito');
    
    </script>";
}


?>