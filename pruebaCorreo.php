
    // ini_set( 'display_errors', 1 );
    // error_reporting( E_ALL );
    // $from = "serviciotecnico@manzover.co";
    // $to = "servicioalcliente@manzover.co";
    // $subject = "Prueba envio mail";
    // $message = "Esta es una prueba que funciona la fucion mail() de PHP ";
    // $headers = "From:" . $from;
    // $respuesta= mail($to,$subject,$message, $headers);
    // if($respuesta){
    // echo ("El mensaje se envió correctamente...");
    // }else{
    //     echo ("El mensaje NO!!! se pudo eviar :".E_ALL);
    // }
    // $mail = "Prueba de mensaje";
    // //Titulo
    // $titulo = "PRUEBA DE TITULO";
    // //cabecera
    // $headers = "MIME-Version: 1.0\r\n"; 
    // $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    // //dirección del remitente 
    // $headers .= "From: Geeky Theory < sevicioalcliente@manzover.co >\r\n";
    // //Enviamos el mensaje a tu_dirección_email 
    // $bool = mail("oscar.masmela@gmail.co",$titulo,$mail,$headers);
    // if($bool){
    //     echo "Mensaje enviado";
    // }else{
    //     echo "Mensaje no enviado";
    // }
    <!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Formulario</title>
<link href="styles.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- formulario de contacto -->

	<form action="envia.php" method="post" class="form-consulta"> 
		<label>Nombre y apellido: <span>*</span>
			<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
		</label>
		
		<label>Email: <span>*</span>
			<input type="email" name="email" placeholder="Email" class="campo-form" required>
		</label>
		
		<label>Consulta:
			<textarea name="consulta" class="campo-form"></textarea>
		</label>

		<input type="submit" value="Enviar" class="btn-form">
	</form>

<!-- formulario -->

</body>
</html>