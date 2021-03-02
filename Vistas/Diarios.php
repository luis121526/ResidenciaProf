<html>
    <head>
        <link rel="icon" href="../Imagenes/logo.ico"/>
        <title>Diarios De Trabajo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    </head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
    <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.css"/>
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
        <div class="crud2">
            <form>
            <table id="ejemplo" class="table table-striped table-bordered" styke="width:100%">
                <h6 class="text-center"> Diarios De Trabajo </h6>
                    <thead>
                        <tr>
                        
                        <?php         
                        include '../Conexionbd/Conexion.php';
                        $query1=mysqli_query($conexion,"SHOW COLUMNS FROM diario FROM preescolar");
                        while($fr1=mysqli_fetch_row($query1)){
                            echo "<th> $fr1[0]  </th>";
                        }
                        ?>
                        <th>Seleccionar</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                         $query2=mysqli_query($conexion,"SELECT *FROM diario");
                         while($fr2=mysqli_fetch_array($query2)){    
                        echo "<tr>
                              <td>  $fr2[id_diario] </td>
                              <td>  $fr2[alumno] </td>
                              <td>  $fr2[fecha] </td>
                              <td>  $fr2[descripcion] </td>
                              <td><input type='checkbox' name='eliminar[]' value='$fr2[id_diario]'/> </td>
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
     <!--
     <div class="modificar">
         <h6 class="text-center"> Modificar Diarios </h6>
                        
                 <form>
                <div class="form-group">
                    <label for="seleccion">Selecciona ID de diario</label>
                   <select>
                        <?php
                        /*$query3=mysqli_query($conexion,"SELECT *FROM diario");
                        while($fr3=mysqli_fetch_row($query3)){
                            echo "
                            <option>$fr3[0]</option>";
                        }*/
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
    </div>-->


    <!-- jQuery -->
	<script language="javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<!-- El JavaScript de DataTables -->
	<script language="javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-flash-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>

	<!-- El código JavaScript -->
	<script language="javascript">
		$('#ejemplo').DataTable();
        
	</script>
    </body>
    <!--
    <script>
$(document).ready( function () {
    $('#ejemplo').DataTable();
    "languaje":{
        "lengthMenu":"Mostrar menu registros",
        "zeroRecords":"Sin resultados",
        "info":"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty":"Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered":"(Filtrando un total de _MAX_ registros",
        "sSearch":"Buscar",
        "oPaginate":{
            "sFirst":"Primero",
            "sLast":"Ultimo",
            "sNext":"Siguiente",
            "sPrevious":"Anterior",
        },
        "sProcessing":"Procesando...",
    }
} );
        </script>-->
    <footer>

    </footer>
</html>