<?php
    // SENDS EMAIL AFTER SUBMISSION 
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $message = $_POST['contactMessage'];
    $formcontent="From: $name \n Email: $email \n Message: $message";
    $recipient = "*oscar.valdivia.t@gmail.com";
    $subject = "Contact Form Submission";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error 1!");

    // SENDS EMAIL CONFIRMATION TO USER ABOUT EMAIL SENT 
    $confirmationSubject = "Thank you for contact with us";
    $confirmationContent="Hey $name, \n Thanks for filling out our contact form.";
    mail($email, $confirmationSubject, $confirmationContent) or die("Error 2!");
    $msg = "OK";
?>