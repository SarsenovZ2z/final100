<?php
    $isMessageSend = false;
    if (isset($_POST["action"]) && $_POST["action"]=="sendMessage") {
        $to = "sandybeck.kunakov@gmail.com";//"sandybeck.kunakov@gmail.com";
        $subject = "ITSI | ".$_POST["subject"];
        $message = "<p><strong>Name:</strong> ".$_POST["name"]."</p>"
                  ."<p><strong>Email address:</strong> ".$_POST["email"]."</p>"
                  ."<p><strong>Comment:</strong><br/>"
                  .$_POST["comment"]."</p>";

        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "From: info@itsi.kz\r\n";
        $headers .= 'Reply-To: '.$_POST["email"].'\r\n';
        $isMessageSend = mail($to, $subject, $message, $headers);
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <title>ITSI | HOME PAGE</title>
        <style>
            #wrapper {
                background-color: white;
                text-align: center;
            }
            .blue-title {
                padding-top: 50px;
                font-size: 280%;
                color: #0008A6;
                font-weight: bold;
            }
            .blue-title span {
                font-weight: 400;
            }
            .blue-title div.line {
                width: 240px!important;
                margin: auto;
            }
            .achievements div {
                text-align: center;
                font-size: 110%;
            }
            .achievements div.blue-title {
                font-size: 110%;
            }
            .achievements img {
                width: 90%;
                height: 90%;
                padding: 10%;
            }
            @media screen and (max-width: 768px) {
                .achievements {
                    font-size: 110%;
                }
                .achievements img {
                    width: 100%;
                    padding: 5%;
                    padding-bottom: 20%;
                }
            }
        </style>
    </head>
    <body>
        <?php
            include "header.php";
        ?>
        <div id="wrapper">
            <section>
                <div class="container">
                    <div class="blue-title">
                        <span>OUR</span> ACHIEVEMENTS
                        <div class="line"></div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="achievements row">
                        <div class="col-xs-4">
                            <div class="blue-title">ONE OF THE LEADERS</div>OF SEGMENT
                        </div>
                        <div class="col-xs-4">
                            <div class="blue-title">MORE THEN 25 YEARS</div>OF EXPERIENCE
                        </div>
                        <div class="col-xs-4">
                            <div class="blue-title">ONLY PROFESSIONALS</div>IN STAFF
                        </div>
                    </div>
                    <div class="achievements row">
                        <div class="col-xs-4">
                            <img src="images/home_1.png">
                        </div>
                        <div class="col-xs-4">
                            <img src="images/home_2.png">
                        </div>
                        <div class="col-xs-4">
                            <img src="images/home_3.png">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
            include "footer.php";
        ?>
        <?php if ($isMessageSend): ?>
            <div id="messageSendModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <br/>
                      <h3><center>SUCCESS</center></h3>
                  </div>
                </div>
              </div>
            </div>
            <script>
                jQuery(document).ready(function() {
                    jQuery("#messageSendModal").modal();
                });
            </script>
        <?php endif; ?>
    </body>
</html>
