<?php
    $isMessageSend = false;

    $from_email = "info@itsi.kz";
    $recipient_email = "sandybeck.kunakov@gmail.com";//nurik9293709@gmail.com;

    $sender_name    = filter_var($_POST["name"], FILTER_SANITIZE_STRING); //sender name
    $reply_to_email = filter_var($_POST["email"], FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
    $subject        = "ITSI | ".filter_var($_POST["subject"], FILTER_SANITIZE_STRING); //get subject from HTML form
    $message        = filter_var($_POST["comment"], FILTER_SANITIZE_STRING); //message


    $boundary = md5(time());
    //header
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From:".$from_email."\r\n";
    $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary = ".$boundary."\r\n\r\n";

    //plain text
    $body = "--".$boundary."\r\n";
    $body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode("<h1>Name: ".$sender_name."</h1><h2>Email: ".$reply_to_email."</h2><h3>".$subject."</h3><p>".$message."</p>\r\n"));

    //attachment
    if (isset($_FILES["fileToUpload"])) {

        $file_tmp_name    = $_FILES['fileToUpload']['tmp_name'];
        $file_name        = $_FILES['fileToUpload']['name'];
        $file_size        = $_FILES['fileToUpload']['size'];
        $file_type        = $_FILES['fileToUpload']['type'];
        $file_error       = $_FILES['fileToUpload']['error'];

        for ($i=0;$i<sizeof($file_tmp_name);++$i) {
            if ($file_error[$i]>0) {
                die("upload error");
            }
            $handle = fopen($file_tmp_name[$i], "r");
            $content = fread($handle, $file_size[$i]);
            fclose($handle);
            $encoded_content = chunk_split(base64_encode($content));

            $body .= "--".$boundary."\r\n";
            $body .="Content-Type: ".$file_type[$i]."; name=".$file_name[$i]."\r\n";
            $body .="Content-Disposition: attachment; filename=".$file_name[$i]."\r\n";
            $body .="Content-Transfer-Encoding: base64\r\n";
            $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n";
            $body .= $encoded_content;
        }

    }

    $isMessageSend = mail($recipient_email, $subject, $body, $headers);
    echo ($isMessageSend?"Send":"Error");

?>
