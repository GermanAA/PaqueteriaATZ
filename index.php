<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$password = $_ENV['DB_PASSWORD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreCliente = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];

    if ($comentario != "") {
        // Datos del correo
        $destinatario = "armendariz.german@gmail.com";
        $asunto = "Servicio Paquetería";

        // Construir mensaje en formato HTML
        $mensaje = "
        <html>
        <head>
            <title>Servicio Paquetería</title>
            <meta charset='UTF-8'>
        </head>
        <body>
            <h2>Detalles del cliente:</h2>
            <p><strong>Nombre del cliente:</strong> {$nombreCliente}</p>
            <p><strong>Correo:</strong> {$correo}</p>
            <p><strong>Teléfono:</strong> {$telefono}</p>
            <p><strong>Comentario:</strong> {$comentario}</p>
        </body>
        </html>";

        // Configuración de PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'localhost'; // Servidor SMTP
            $mail->SMTPAuth = false;
            $mail->Username = 'info@paqueteria-atz.com';
            $mail->Password = $password;
            $mail->Port = 25;

            // Configuración del correo
            $mail->setFrom('info@paqueteria-atz.com', 'Contacto Paquetería');
            $mail->addAddress($destinatario);

            // Contenido del correo
            $mail->isHTML(true); // Activar el modo HTML
            $mail->Subject = $asunto;
            $mail->Body = $mensaje;

            // Enviar correo
            $mail->send();
            echo "<!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Mensaje Enviado</title>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
                <link rel='stylesheet' href='estilos/styles.css'>
            </head>
            <body>
                <div class='container mt-5'>
                    <div class='alert alert-success'>
                        <h4 class='alert-heading'>Gracias, $nombreCliente</h4>
                        <p>Tu mensaje ha sido enviado con éxito. Nos pondremos en contacto contigo a la brevedad posible.</p>
                        <hr>
                        <p class='mb-0'><a href='index.php' class='btn btn-primary'>Volver al formulario</a></p>
                    </div>
                </div>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
            </body>
            </html>";
        } catch (Exception $e) {
            echo "¡Mensaje No Enviado! Error: {$mail->ErrorInfo}";
        }
    }
}


require 'views/inicio.view.php';



?>