<?php
  $servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="formulario";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
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

  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
 /* $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

 /* $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();*/
?>
