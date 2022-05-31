<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="formulario";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario de contactos</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/seccion.css">
        <link rel="stylesheet" href="assets/css/contactoAdmin.css">
    </head>
    <body>
        <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          			<i class="fa fa-bars"></i>
	          			<span class="sr-only">MTgroup</span>
	        		</button>
        		</div>
				<div class="p-4 pt-5">
		  			<h1><a href="index.html" class="logo">MTgroup</a></h1>
	        		<ul class="list-unstyled components mb-5">
						<li>
							<a href="seccion_admin.php">Inicio</a>
						</li>

						<li>
							<a href="cursos.php">Cursos</a>
						</li>
						<li>
							<a href="#">Profesores</a>
						</li>
						<li>
							<a href="contactosAdmin.php">Contactos</a>
						</li>
	        		</ul>



					<div class="footer">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>

	      		</div>
    		</nav>

        <div class="contenedor">
            <div id="contentContact" class="p-4 p-md-5 pt-5">

                <h2 class="mb-4">Recepción de formularios</h2>

                <div class="tabla">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Motivo</th>
                            <th>Detalle</th>
                        </tr>
                            <?php
                                $consulta = "SELECT * FROM datos";
                                $ejecutarConsulta = mysqli_query($enlace, $consulta);
                                $verFilas = mysqli_num_rows($ejecutarConsulta);
                                $fila = mysqli_fetch_array($ejecutarConsulta);

                                if(!$ejecutarConsulta){
                                    echo"Error en la consulta";
                                }else{
                                    if($verFilas<1){
                                        echo"<tr><td>Sin registros</td></tr>";
                                    }else{
                                        for($i=0; $i<=$fila; $i++){
                                            echo'
                                                <tr>
                                                    <td>'.$fila[4].'</td>
                                                    <td>'.$fila[0].'</td>
                                                    <td>'.$fila[1].'</td>
                                                    <td>'.$fila[2].'</td>
                                                    <td>'.$fila[3].'</td>
                                                </tr>
                                            ';
                                            $fila = mysqli_fetch_array($ejecutarConsulta);

                                        }

                                    }
                                }


                            ?>
                                
                                
                        
                        
                    </table>
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/seccion.js"></script>
    </body>
</html>
<?php
	if(isset($_POST['form'])){
		$nombre =$_POST["nombre"];
		$correo=$_POST["correo"];
        $motivo=$_POST["motivo"];
		$detalle=$_POST["detalle"];
		$id= rand(1,99);

		$insertarDatos = "INSERT INTO datos VALUES('$nombre',
													'$correo',
													'$motivo',
                                                    '$detalle',
													'$id')";

		$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

		if(!$ejecutarInsertar){
			echo"Error En la linea de sql";
		}
	}
?>
