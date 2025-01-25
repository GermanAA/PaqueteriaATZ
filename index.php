<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$password = $_ENV['DB_PASSWORD'];
$secretKey= $_ENV['CAP_PASSWORD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombreCliente = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Validar el CAPTCHA
    //$secretKey = 'your-secret-key';
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $recaptchaResponse);
    $responseData = json_decode($response);

    if (!$responseData->success) {
        // CAPTCHA no válido
        echo "<div class='alert alert-danger'>Error: Verifica el CAPTCHA antes de enviar el formulario.</div>";
        exit;
    }

    if ($comentario != "") {
        // Continuar con el envío del correo
        $destinatario = "armendariz.german@gmail.com";
        $asunto = "Servicio Paquetería";

        $mensaje = "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <title>Servicio Paquetería</title>
        </head>
        <body>
            <h2>Detalles del cliente:</h2>
            <p><strong>Nombre del cliente:</strong> " . htmlspecialchars($nombreCliente, ENT_QUOTES, 'UTF-8') . "</p>
            <p><strong>Correo:</strong> " . htmlspecialchars($correo, ENT_QUOTES, 'UTF-8') . "</p>
            <p><strong>Teléfono:</strong> " . htmlspecialchars($telefono, ENT_QUOTES, 'UTF-8') . "</p>
            <p><strong>Comentario:</strong> " . nl2br(htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8')) . "</p>
        </body>
        </html>";

        // Configuración de PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->SMTPAuth = false;
            $mail->Username = 'info@paqueteria-atz.com';
            $mail->Password = $password;
            $mail->Port = 25;

            $mail->setFrom('info@paqueteria-atz.com', 'Contacto Paquetería');
            $mail->addAddress($destinatario);

            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = $asunto;
            $mail->Body = $mensaje;

            $mail->send();
            echo "<div class='alert alert-success'>Gracias, tu mensaje ha sido enviado con éxito.</div>";
        } catch (Exception $e) {
            echo "¡Error al enviar el correo! {$mail->ErrorInfo}";
        }
    }
}



require 'views/inicio.view.php';



?>