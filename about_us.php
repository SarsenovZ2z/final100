<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <title>ITSI | ABOUT US</title>
        <style>
            #wrapper {
                font-size: 130%;
                text-align: center;
                background-color: white;

            }
            @media screen and (min-width: 768px) {
                .firstofT {
                    transform: translate(0, -100px);
                    background-color: white;
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
                height: 2px!important;
                width: 240px!important;
                margin: auto;
            }

            .read-more:hover {
                color: white;
                border-color: white;
                background-color: #41B7C4;
            }
            @media screen and (min-width: 768px) {
              .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
              }
            }
            .modal-content {
                border-radius: 0;
                background-color: rgba(255, 255, 255, 0.8);
            }
            .modal-dialog {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%)!important;
            }
            .modalBtn {
                display: block;
                cursor: pointer;
            }
            .modalBtn img {
                width: 100%;
                height: 230px;
                object-fit: cover;
                border: 2px solid;
            }
            .modalBtn img:hover {
                filter:sepia(20%);
            }
            .modal-body h4 {
                font-size: 110%;
                font-weight: bold;
                text-align: center;
            }
            .modal-body hr {
                border-radius: 3px;
                width: 120px;
                margin: auto;
            }
            .modal-body p {
                padding: 10px;
                font-size: 150%;
                color: #0008A6;
            }
            @media screen and (max-width: 768px) {
                .modalBtn img {
                    height: 150px;
                }
            }
        </style>
    <body>
        <?php
            include "header.php";
        ?>

        <div id="wrapper">
            <section>
                <div class="firstofT container">
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

                            <!-- Trigger the modal with a button -->
                            <a class="modalBtn" role="button" data-toggle="modal" data-target="#leftModal"><img src="images/left.png"/></a>

                            <!-- Modal -->
                            <div id="leftModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <br/>
                                      <h4>VISION</h4>
                                      <hr/>

                                      <p>
                                      TO BE THE BEST IN INNOVATIVE TECHNOLOGIES CREATED IN SCIENCE AND APPLIED IN INDUSTRY
                                      </p>
                                  </div>
                                </div>
                              </div>
                            </div>

                        </div>
                        <div class="col-xs-6">
                            <!-- Trigger the modal with a button -->
                            <a class="modalBtn" role="button" data-toggle="modal" data-target="#rightModal"><img src="images/right.png"/></a>
                            <div id="rightModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <br/>
                                        <h4>MISSION</h4>
                                        <hr/>

                                        <p>
                                            TO SERVE FOR PEOPLE AND TO MAKE THEIR LIVES BETTER
                                        </p>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br/>
        </div>

        <?php
            include "footer.php";
        ?>
    </body>
</html>
