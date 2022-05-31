<!doctype html>
<html lang="en">

    <head>
        <title>Inicio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/seccion.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
							<a href="#">Cursos</a>
						</li>
                        <li>
                            <a href="#">Profesores</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
    
                    <div class="footer">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </nav>


            <div id="content" class="p-4 p-md-5 pt-5">
                <h2 class="mb-4">Videos</h2>

                <div class="container mt-3 mb-3">
                    <h1><b>Galeria de videos</b></h1>
                    <hr />
                    <a href="upload.php" class="btn btn-primary mt-3">Subir nuevo video</a>
                    <hr />
                    <div class="row">
                        <?php
                        include("db.php");
                        $q = "SELECT * FROM video";
                        $query = mysqli_query($conn, $q);
                        while ($row = mysqli_fetch_array($query)) {
                            $name = $row['name'];
                            ?>
                            <div class="col-md-4">
                                <video width="100%" controls>
                                    <source src="<?php echo 'upload/' . $name; ?>">
                                </video>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!--<script src="js/jquery-3.2.1.min.js"></script>-->
        <script src="assets/js/bootstrap.js"></script>

        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/seccion.js"></script>
    </body>

</html>