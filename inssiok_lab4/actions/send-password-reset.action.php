<?php
require_once "../config.php";
global $conn;

$email=$_POST['email'];

$token=bin2hex(random_bytes(32));

$token_hashed=hash("sha256",$token);

$expiredIn = date("Y-m-d H:i:s",time()+60*30);

$sql = "UPDATE user SET token_hashed=:th, token_expire_date=:ted WHERE user_email=:ue";
$stmp = $conn->prepare($sql);
$stmp->bindValue(":ue",$email);
$stmp->bindValue(":th",$token_hashed);
$stmp->bindValue(":ted",$expiredIn);
if($stmp->execute()){
    $mail = require "../phpMailer.php";
    $mail->setFrom("noreply@localhost.com");
    $mail->addAddress($email);
    $mail->Subject="Password reset";
    $mail->Body = <<<END
            Click <a href="http://localhost:8000/actions/reset-password.action.php?token=$token_hashed">To reset password</a>
        END;
    try {
        $mail->send();
    }catch (Exception $e){
        echo "Mailer error {$mail->ErrorInfo}";
    }

}

require '../templates/header.php';

echo "<div class='container mx-0 py-3'><p>Check your email inbox for reseting password</p></div>";
