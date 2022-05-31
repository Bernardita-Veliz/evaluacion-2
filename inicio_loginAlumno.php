<?php
session_start();


?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login con  PHP - Bootstrap 4</title>

        <link rel="stylesheet" href="../Proyecto-2/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Proyecto-2/assets/css/login.css">
        <link rel="stylesheet" href="../Proyecto-2/assets/css/sweetalert2.min.css">            
    </head>    
    <body>
      
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        
                        <h1 class="display-4 text-center">¡Bienvenido!</h1>
                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                      <p class="lead text-center">Esta es la página de inicio, luego de un LOGIN correcto.</p>
                      <hr class="my-4">
                      <a class="btn btn-secondary btn-lg" href="seccion_alumno.php" role="button">Mi sección</a>          
                      <a class="btn btn-danger btn-lg" href="../Proyecto-2/BD/logout.php" role="button">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>        
     <script src="../Proyecto-2/assets/js/jquery-3.3.1.min.js"></script>    
     <script src="../Proyecto-2/assets/js/bootstrap.min.js"></script>    
     <script src="../Proyecto-2/assets/js/popper.min.js"></script>    
        
     <script src="../Proyecto-2/assets/js/sweetalert2.all.min.js"></script>    
     <script src="../Proyecto-2/assets/js/codigo.js"></script>    
    </body>
</html>