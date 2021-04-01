<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "bobalraghav786@gmail.com";
    
    $email_subject = "Somebody filled the form to contact you";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "raghavbobal1@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To : $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");

    ?>