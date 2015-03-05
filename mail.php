<?php 
    ob_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['message'];
    $subject = "Email submission from Skylyy.com";
    $emailto = "slyyti@gmail.com";
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1\r\n";
    $message = "From: $name, Email: $email<br /><hr />$text";
    mb_send_mail($emailto, $subject, $message, $headers);
    ob_flush();
    header("Location: index.php?success");

?>

             