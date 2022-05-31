<?php 

include("db.php");

if (isset($_POST['upload'])) {
	// $name = $_FILES['file'];
	// echo "<pre>";
	// print_r($name);
	// exit();
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];	
	$temp_name = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	
	$file_destination = "upload/".$file_name;

	if (move_uploaded_file($temp_name,$file_destination)) { 
	
	$q = "INSERT INTO video (name) VALUES ('$file_name')";

	if(mysqli_query($conn,$q)) {

		$success = "Vídeo subido con éxito.";
	}
	else {
		
		$failed = "¿Algo salió mal?";
	}
}
else {

	$msz = "Por favor seleccione un video para cargar..!";
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>cargar video</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- <script src="assets/js/jquery.min.js"></script> -->
    </head>
    <body>

        <div class="container mt-3">
            <h1 class="text-center mb-5"><b>Subir video a la base de datos</b></h>
            <div class="col-lg-8 m-auto">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><strong>Cargar video:</strong></label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <?php if(isset($success)) { ?>
                        <div class="alert alert-success">
                            <?php echo $success;?>
                        </div>
                        <?php } ?>
                        <?php if(isset($failed)) { ?>
                            <div class="alert alert-danger">
                                <?php echo $failed;?>
                            </div>
                            <?php } ?>
                            <?php if(isset($msz)) { ?>
                                <div class="alert alert-danger">
                                    <?php echo $msz;?>
                            </div>
                            <?php } ?>
                            <input type="submit" name="upload" value="Cargar" class="btn btn-success ml-3">

                            <input type="button" onclick="location.href='cursos.php'" name="upload" value="Regresar" class="btn btn-danger ml-3">
                </form>
            </div>
        </div>
    </body>
</html>