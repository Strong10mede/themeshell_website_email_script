<?php

if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['message']) && isset($_POST['subject'])) {  
    $name = $_POST['username'];
    $mail_from = $_POST['email'];
    $mail_to = "kmayur809@gmail.com";
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $headers = "Content-type: text/plain; charset=UTF-8" ."\r\n".
                "From: ".$mail_from."\r\n".
                "Reply-to: ".$mail_from."\r\n".
                "X-Mailer: PHP/" . phpversion();
    if(mail($mail_to,$subject,$message,$headers)){
        header("location: http://localhost/themeshell_website_email_script/index.html");
    }
    else{
        header("location: http://localhost/themeshell_website_email_script/about.html");
    }

} else {
    header("location : http://localhost/themeshell_website_email_script/detail.html");
}
