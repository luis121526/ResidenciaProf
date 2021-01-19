<?php
$host="localhost";
$usuario="root";
$contasena="";
$BaseDatos="preescolar";
$conexion=mysqli_connect($host,$usuario,$contasena,$BaseDatos);
if(!$conexion){
    echo "<script>
    alert('Ocurrio algun problema al intentar conectar a la base de datos');
    </script>;
    ";
}
?>