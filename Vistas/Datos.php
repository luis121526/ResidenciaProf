<html>
    <head>
        <link rel="icon" href="../Imagenes/logo.ico"/>
        <title>Mis Datos</title>
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
        <!--mostrar datos usuarios-->
                <div class="datos">
                    <table class="table">
                        <h6 class="text-center">Mis Datos </h6>
                        <thead class="thead-dark">
                            <tr>
                            <!--<th><img src="../Imagenes/logo.png" heigth="50" width="50"/></th>-->
                            <!-- logotipo-->
                            <div class="perfil">
                                <!--nombreusuario(s)-->
                                <img src="../Imagenes/logo.png" class="imagen">
                                <div class="nomuser">
                                <?php
                                include '../Conexionbd/Conexion.php';
                                echo "<center><h4> $_SESSION[usuario]</h4></center>";
                                ?>
                            </div>
                            </div>
                            <!--logotipo-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                           // session_start();
                           // echo "$_SESSION[usuario]";
                            include '../Conexionbd/Conexion.php';
                            $nombre=$_SESSION['usuario'];
                            $query1=mysqli_query($conexion,"SELECT *FROM usuarios WHERE nombreusuario='$nombre'");
                            while($fr=mysqli_fetch_array($query1)){
                                echo "
                                <tr>
                                <td>Nombre:</td>
                                <td>$fr[nombre]</td>
                                </tr>
                                <tr>
                                <td>Apellido Paterno:</td>
                                <td>$fr[apellidop]</td>
                                </tr>
                                <tr>
                                <td>Apellido Materno:</td>
                                <td>$fr[apellidom]</td>
                                </tr>
                                <tr>
                                <td>Fecha Nacimiento:</td>
                                <td>$fr[fechanacimiento]</td>
                                </tr>
                                <tr>
                                <td>Correo:</td>
                                <td>$fr[correo]</td>
                                </tr>
                                <tr>
                                <td>Nombre Usuario:</td>
                                <td>$fr[nombreusuario]</td>
                                </tr>
                                ";
                            }
                            ?>
                        </tbody>
                        </table>
        </div>
<!--mostrar datos usuario-->
<!--modificar datos de usuario-->
                        <div class="md">
                        <h6 class="text-center">Modificar Mis Datos </h6>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nombre"  placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="apep" placeholder="Apellido Paterno">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="apem" placeholder="Apellido Materno">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fn" placeholder="Fecha Nacimiento">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="correo" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nu" placeholder="Nombre Usuario">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="pass" placeholder="Contraseña">
                                </div>
                                <input type="submit" class="btn btn-success" value="Modificar"/>
                            </form>
                        </div>
               
    </body>
    <footer>

    </footer>
</html>