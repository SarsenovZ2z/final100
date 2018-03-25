<?php
    $to = "nurik9293709@gmail.com";
    $subject = "ITSI | ".$_POST["subject"];
    $message = "<strong>Name:</strong> ".$_POST["name"]."<br/>"
              ."<strong>Email address:</strong> ".$_POST["email"]."<br/>"
              ."<strong>Comment:</strong>"
              ."<p>".$_POST["comment"]."</p>";

    
    $headers = 'From: info@itsi.kz' . "\r\n" .'Reply-To: '.$_POST["email"] . "\r\n";
    //var_dump(mail($to, $subject, $message, $headers));
?>
