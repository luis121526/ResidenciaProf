<html>
    <head>
        <link rel="icon" href="../Imagenes/logo.ico"/>
        <title>Observaciones</title>
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
        <!--datos observaciones-->
        <div class="crud">
            <form>
            <table class="table">
                <h6 class="text-center"> Eliminar Observaciones </h6>
                    <thead>
                        <tr>
                        
                        <?php     
                        include '../Conexionbd/Conexion.php';
                        $query1=mysqli_query($conexion,"SHOW COLUMNS FROM observaciones FROM preescolar");
                        while($fr1=mysqli_fetch_row($query1)){
                            echo "<th> $fr1[0]  </th>";
                        }
                        ?>
                        <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                         $query2=mysqli_query($conexion,"SELECT *FROM observaciones");
                         while($fr2=mysqli_fetch_array($query2)){    
                        echo "<tr>
                              <td>  $fr2[id_observacion] </td>
                              <td>  $fr2[alumno] </td>
                              <td>  $fr2[fecha] </td>
                              <td>  $fr2[descripcion] </td>
                              <td><input type='checkbox' name='eliminar[]' value='$fr2[id_observacion]'/> </td>
                             </tr> ";
                        }
                        ?>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th> <input type="submit" name="borrar" value="Eliminar" class="btn btn-danger"/></th>
                        </tr>
                    </tfoot>
                    </table>
            </form>
        </div>
     <!--datos observaciones-->
     <!--modificar--> 
     <div class="modificar">
         <h6 class="text-center"> Modificar Observaciones </h6>
                        
                 <form>
                <div class="form-group">
                    <label for="seleccion">Selecciona ID de Observacion</label>
                   <select>
                        <?php
                        $query3=mysqli_query($conexion,"SELECT *FROM observaciones");
                        while($fr3=mysqli_fetch_row($query3)){
                            echo "
                            <option>$fr3[0]</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nomalum">Editar Nombre Alumno</label>
                    <input type="text" class="form-control" name="alumno" placeholder="Alumno">
                </div>
                <div class="form-group">
                    <label for="fecha">Editar Fecha</label>
                    <input type="text" class="form-control" name="fecha" placeholder="Fecha">
                </div>
                <div class="form-group">
                    <label for="content">Editar Descripcion</label>
                    <input type="text" class="form-control" name="contenido" placeholder="Descripcion">
                </div>
                <input type="submit" class="btn btn-warning" value="Modificar"/>
                </form>
    </div>
    </body>
    <footer>

    </footer>
</html>