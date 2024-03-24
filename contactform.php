<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "jrshaul@gmail.com";
    $subject = "New email from your site!";
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $title = '<h3>Hello! You have received a new mail from your website!</h3>';
    
    $body = "$title
            <br/>
            <b>From:</b> $fname
            <br/>
            <b>E-Mail:</b> $email
            <br/>
            <b>Message:</b>\n$message
            <br/>
            <br/>";

    if (mail($to, $subject, $body, $headers)){
        echo "<h1>Sent Successfully! Thank you"." ".$fname.", We will contact you shortly!</h1>";
    } else { 
        echo "Something went wrong!";
    }
}
?>
<br>
<a href="/">Back to Homepage</a>
