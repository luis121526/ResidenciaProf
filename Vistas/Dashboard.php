<html>
    <head>
        <link rel="icon" href="../Imagenes/logo.ico"/>
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    </head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
    <meta charset="UTF-8">
    <body>
        <!-- logotipo-->
        <div class="logo">
            <!--nombreusuario(s)-->
            <img src="../Imagenes/logo.png" class="imagen">
            <div class="nomuser">
            <?php
            include '../Conexionbd/Conexion.php';
            session_start();
            echo "<center><h4> $_SESSION[usuario]</h4></center>";
            ?>
        </div>
        </div>
        <!--logotipo-->
        <!--menu lateral-->
        <div class="menulateral">
            <div class="list-group">
            <a href="../Vistas/Dashboard.php" class="list-group-item list-group-item-action">Menu Principal</a>
            <a href="../Vistas/Observaciones.php" class="list-group-item list-group-item-action">Observaciones Permanentes</a>
            <a href="../Vistas/Diarios.php" class="list-group-item list-group-item-action">Diarios De Trabajo</a>
            <a href="../Vistas/Datos.php" class="list-group-item list-group-item-action">Mis Datos</a>
            <a href="../Conexionbd/CerrarSesion.php" class="btn btn-danger">Cerrar Sesion </a>
            </div>
        </div>
        <!-- menu lateral-->
        
    </body>
    <footer>

    </footer>
</html>