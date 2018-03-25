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
            #achievements div {
                text-align: center;
                font-size: 110%;
            }
            #achievements div.blue-title {
                font-size: 110%;
            }
            #achievements img {
                width: 90%;
                height: 90%;
                padding: 10%;
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
                    <div id="achievements" class="row">
                        <div class="col-xs-4">
                            <div class="blue-title">ONE OF THE LEADERS</div>OF SEGMENT
                            <img src="images/home_1.png">
                        </div>
                        <div class="col-xs-4">
                            <div class="blue-title">MORE THEN 25 YEARS</div>OF EXPERIENCE
                            <img src="images/home_2.png">
                        </div>
                        <div class="col-xs-4">
                            <div class="blue-title">ONLY PROFESSIONALS</div>IN STAFF
                            <img src="images/home_3.png">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
            include "footer.php";
        ?>
    </body>
</html>
