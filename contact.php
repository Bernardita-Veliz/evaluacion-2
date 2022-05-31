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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contacto</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/contact.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">MTgroup</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="about.html">Quienes Somos</a></li>
          <li><a href="courses.html">Cursos</a></li>
          <li><a href="trainers.html">Profesores</a></li>
          <li><a href="events.php">Contenido</a></li>

          
          <li><a class="active" href="contact.html">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.html" class="get-started-btn">Ingresar</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contactanos</h2>
        <p>LLámanos al (+569) 12345678 (envíanos un whatsApp si no podemos contestarte), mándanos un email a info@example.com o llena el siguiente formulario y te contactaremos a la brevedad!</p>
      </div>
    </div><!-- End Breadcrumbs -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">

          <div class="row mt-5">
  
            <div class="col-lg-8 mt-5 mt-lg-0">
  
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="name">Tu nombre:</label>
                    <input type="text" name="nombre" class="form-control" id="name" placeholder="John Doe" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="email">Tu correo:</label>
                    <input type="email" class="form-control" name="correo" id="email" placeholder="john.doe@email.com" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <label for="department-selection">Motivo de solicitud: </label>
                  <select id="department-selection" name="motivo" required>
                      <option value="">Selecione una opcion</option>
                      <option value="billing">Curso de cuerdas</option>
                      <option value="marketing">curso de viento</option>
                      <option value="technical support">escuela de verano</option>
                      <option value="technical support">Cescuela de invierno</option>
                      <option value="technical support">otro</option>
                  </select>
                </div>
                <div class="form-group mt-3">
                  <label for="message">Detalles de solicitud:</label>
                  <textarea class="form-control" name="detalle" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                
                <div class="text-center" name="formContact"><button type="submit">Enviar</button></div>
              </form>
  
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
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
  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MTgroup</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Telefono:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">Quienes somos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terminos de servicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de privacidad</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribete a Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MTgroup</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
	if(isset($_POST['formContact'])){
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