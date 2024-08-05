<?php

require 'views/inicio.view.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombreCliente = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];

    if($comentario!=""){
        	// Se declaran los tres parámetros que se usarán en el correo.
			  $destinatario="armendariz.german@gmail.com";
			  $asunto= "Prueba";
			  $mensaje="Nombre del cliente:" . $nombreCliente . "\nCorreo:" . $correo.  "\nTeléfono:" . $telefono . "\nComentario:" . $comentario;

			// Se intenta enviar el correo y se muestra un mensaje en la página con el resultado.
			  if (mail ($destinatario, $asunto, $mensaje)){
				echo (" Mensaje enviado");
				
				
			  } else {
			    echo  ("MENSAJE NO ENVIADO");
			  } 
    }


}

?>