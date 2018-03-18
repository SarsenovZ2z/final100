<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <title>HOME PAGE</title>
        <style>
            body, html {
                min-width: 260px!important;
                min-height: 100%!important;
                height: 100%!important;
                margin: 0;
            }
            #wrapper {
                font-size: 130%;
                text-align: center;
            }
            #wrapper div {
                background-color: white;
            }
            @media screen and (min-width: 768px) {
                #wrapper div:first-child {
                    transform: translate(0, -100px);
                }
            }
            .text-first {
                padding: 50px;
            }
            .container hr {
                margin: 10px;
                height: 3px;
                background-color: black;
            }
            .text-second span:first-child {
                font-size: 45px;
            }
            .text-second img {
                margin-top: -10px;
                margin-left: -25px;
                margin-right: -35px;
            }
            ul li {
                text-align: left;
            }
            .read-more {
                padding: 10px 30px;
                border: 2px solid #0008A6;
                text-decoration: none!important;
                transition: 0.5s ease;
                color: #0008A6;
            }
            #wrapper div.line {
                width: 240px!important;
                margin: auto;
            }

            .read-more:hover {
                color: white;
                border-color: white;
                background-color: #41B7C4;
            }

        </style>
    <body>
        <?php
            include "header.php";
        ?>

        <div id="wrapper">
            <section>
                <div class="container">
                    <p class="text-first">
                        Innovative Technologies in Science and Industry (ITS&I) stands at the forefront of the Kazakhstan innovating sector. As a reputable company, we are a pioneer enabler of innovative, end-to-end solutions of information security technologies, automation of technological cycles in gas, oil industry and nuclear plant stations.
                    </p>
                    <hr/>
                    <p class="text-second">
                        <span>WHY JUST<img src="images/about_us_1.png"><span style="font-weight:bold;">?</span></span>
                        <div class="line"></div>
                    </p>
                    <br/>
                    <p>
                        ITSI Company provides the most comprehensive,straightforward solutions for setting up and running business-science operations in the country:
                    </p>
                    <ul>
                        <li>Information Security</li>
                        <li>Industrial Training School</li>
                        <li>Mathematical models of technological processes in industry and assessments of reliability of technological cycles and  constructed elements</li>
                        <li>Automated system implementation in industrial enterprises</li>
                    </ul>
                    <br/>
                    <p>
                        <a class="read-more" role="button" href="/services.php">READ MORE</a>
                    </p>
                    <br/>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">

                        </div>
                        <div class="col-xs-6">

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
