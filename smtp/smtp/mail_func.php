<?php
function send_mail($to, $subject, $message, $from) {
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = wordwrap($message, 70);
    $message = str_replace("\n.", "\n..", $message);
    return mail($to, $subject, $message, $headers);
}
?>