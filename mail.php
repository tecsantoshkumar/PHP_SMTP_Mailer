<?php
if (isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['query'])) {
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $send_msg = "Message has been sent!";
    $error_msg = "Error occur!";
    $error_save = "Error occur while saving data!";

    $html = "<table><tr><td>Subject</td><td>$subject</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Query</td><td>$query</td></tr></table>";
   
    include('smtp/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.dreamhost.com"; //Hosting
    $mail->Port = 465; // Hostinng Port
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;
    $mail->Username = "YOUR_USER_NAME";
    $mail->Password = "YOUR_PASSWORD";
    $mail->SetFrom("YOUR_SEND_USER_NAME");
    $mail->addAddress($email);
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $html;
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if ($mail->send()) {
        echo $send_msg;
            header("Location:thanks.php");
      
    } else {
        echo $error_msg;
    }
}
