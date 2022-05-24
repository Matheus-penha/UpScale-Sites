<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['nome'];
  $email = $_POST['email'];
  $message = $_POST['mensagem'];
  $telefone = $_POST['telefone'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = ''; // Gmail address which you want to use as SMTP server
    $mail->Password = ''; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom(''); // Gmail address which you used as SMTP server
    $mail->addAddress(''); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Email recebido pelo site';
    $mail->Body = "<h3>Nome : $name <br>Email: $email <br>Telefone: $telefone <br>Mensagem : $message</h3>";

    $mail->send();
    echo '<!DOCTYPE html>';
    echo '<html xmlns="http://www.w3.org/1999/xhtml">';
    echo '<head>';
    echo '   <meta http-equiv="refresh" content="0; url=http://upscalesites.com.br/contato.php">';
    echo '</head>';
    echo '<body onload="alert('."'".'Email enviado com Sucesso!'."'".');">';
    echo '<a href="http://upscalesites.com.br/contato.php">Voltar a página inicial</a>';
    echo '</body>';
    echo '</html>';
    echo "Sua mensagem foi enviada com sucesso!";
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
      