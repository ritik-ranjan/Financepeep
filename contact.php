<?php
    // Mail id where the message is to be sent
    $to = "contact@ranjanritik1234@gmail.com.com";
    $EmailSubject = "Site contact form"; 
    $message = $_POST["message"];
    $mailheader = "From: ".$_POST["email"]."\r\n";

    $MESSAGE_BODY = "Name: ".$_POST["name"]."\n"; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."\n";
    $MESSAGE_BODY .= "Message: ".$_POST["message"]."\n";
    $var = mail($to, $EmailSubject, $MESSAGE_BODY, $mailheader);

    if($var == true)
    {
        $message = "Thanks for contacting.";
        echo "<script type='text/javascript'>
            window.alert('message sent'); 
            location='../index.html'</script>";
    } 
?>