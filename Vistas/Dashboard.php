<html>
    <head>
        <link rel="icon" href="../Imagenes/logo.ico"/>
        <title>Dashboard</title>
    </head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
    <meta charset="UTF-8">
    <body>
        <!--menu lateral-->
        <div class="menulateral">
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                <center><img src="../Imagenes/logo.ico" width="100" heigth="100"></center>
            </a>
            <a href="../Vistas/Dashboard.php" class="list-group-item list-group-item-action">Menu Principal</a>
            <a href="../Vistas/Observaciones.php" class="list-group-item list-group-item-action">Observaciones Permanentes</a>
            <a href="../Vistas/Observaciones.php" class="list-group-item list-group-item-action">Diarios De Trabajo</a>
            <a href="../Vistas/Datos.php" class="list-group-item list-group-item-action">Mis Datos</a>
            <a href="../Conexionbd/CerrarSesion.php" class="btn btn-danger">Cerrar Sesion </a>
            </div>
        </div>
        <!-- menu lateral-->
        <div class="nomuser">
            <?php
            include '../Conexionbd/Conexion.php';
            session_start();
            echo "<center><h4> $_SESSION[usuario]</h4></center>";
            ?>
        </div>
    </body>
    <footer>

    </footer>
</html>