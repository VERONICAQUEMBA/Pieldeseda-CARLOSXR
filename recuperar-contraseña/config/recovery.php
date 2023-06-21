<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/Exception.php';
require './/PHPMailer/SMTP.php';
require './PHPMailer/PHPMailer.php';

require_once('../config');
$email = $_POST['email'];
$query = "SELECT * FROM usuarios where correo = '$email' AND status = 1";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'piel.de.seda0@gmail.com';
    $mail->Password   = 'imgwucgpxbzzjizd';
    $mail->Port       = 587;

    $mail->setFrom('piel.de.seda0@gmail.com', 'Piel de seda');
    $mail->addAddress('quembaveronica18@gmail.com', 'prueba');
    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, por favor, visita la página de <a href="localhost/spending_tracker/change_password.php?id='.$row['id'].'">Recuperación de contraseña</a>';

    $mail->send();
    header("Location: ../index.php?message=ok");
} catch (Exception $e) {
  header("Location: ../index.php?message=error");
}

}else{
  header("Location: ../index.php?message=not_found");
}

?>
