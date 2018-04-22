<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome-animation.css">

        <title>ITSI | CONTACT US</title>
        <style>
            #wrapper {
                width: 90%;
                padding: 15px 30px;
                margin: auto;
                background-color: white;
                font-size: 130%;
            }

            #wrapper p {
                font-size: 90%;
                padding: 15px 0;
            }

            #wrapper hr {
                height: 2px;
                background-color: black;
                margin-top: 0px;
            }

            .form-right {
                padding-top: 25px;
                background-color: rgba(0, 8, 166, 0.65);
                text-align: center;
                color: white;
            }

            @media screen and (max-width: 992px) {
                #wrapper {
                    width: 100%;
                }
            }

            @media screen and (min-width: 768px) {
                #wrapper {
                    transform: translateY(-100px);
                }
            }

            @media screen and (max-width: 312px) {
                #wrapper {
                    padding: 0px 15px;
                    background-color: white;
                    font-size: 130%;
                }
            }
            .jumbotronTransp {
                background-color: transparent!important;
                width: 85%;
                margin: auto;
            }
            .contact-info {
                display: inline-block;
                padding-bottom: 20px;
            }
            .contact-info a {
                text-decoration: none;
            }
            .contact-info div {
                float: left;
                padding-right: 10px;
            }
            #map {
                height: 300px;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <?php
            include "header.php";
        ?>

        <section>
            <div class="container">
                <div id="wrapper">
                    <div class="row">
                        <div class="col-sm-7">
                            <h1>CONTACT DETAILS</h1>
                            <p>
                                Your comments and suggestions are important to us. Please feel free to fill up our inquiry form so we can respond to you at the soonest time possible. You may also call us via our contact numbers or visit our offices, all of which are listed below.
                            </p>
                            <div id="map"></div>
                            <script>
                            var map;
                            function initMap() {
                                map = new google.maps.Map(document.getElementById('map'), {
                                    center: {lat: 43.295422, lng: 76.957385},
                                    zoom: 15
                                });
                                var marker = new google.maps.Marker({
                                    position: {lat: 43.295422, lng: 76.957385},
                                    map: map
                                });

                                var contentString = "<div>ITSI Company</div>";
                                var infowindow = new google.maps.InfoWindow({
                                    content: contentString
                                });
                                marker.addListener('click', function() {
                                    infowindow.open(map, marker);
                                });
				infowindow.open(map, marker);
                            }
                            </script>
                            <h4>ONLINE REGISTRATION and OTHER QUESTIONS</h4>
                            <hr/>
                            <div class="contact-info">
                                <h4>Industrial Training School</h4>
                                <h4>E-mail: <a href="mailto:info@itsi.kz">info@itsi.kz</a></h4>
                                <h4><div>Phone number: </div><div>+7 (701) 604 30 18<br/>+7 (727) 290 99 81 (FAX)</div></h4>
                            </div>
                        </div>
                        <div class="col-sm-5 form-right">
                            <h1>
                                REACH<br/>
                                OUT<br/>
                                TO<br/>
                                <strong>US</strong>
                            </h1>
                            <div class="contact-fonm">
                                <div class="jumbotronTransp">
                                    <div class="row">
                                        <form class="form-horizontal contact_form" action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="NAME*"/ required>
                                                <input type="hidden" name="action" value="sendMessage"/>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="EMAIL ADDRESS*" required/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control" placeholder="SUBJECT"/>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="comment" class="form-control" rows="5" placeholder="MESSAGE"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div id="filesPreview"></div>
                                                <input type="file" name="file_hidden"  onchange="updateFileList()" multiple="true"/>
                                            </div>
                                            <div class="form-group">
                                                <div class="button-group btnGroup">
                                                    <button type="button" class="btn faa-parent animated-hover" id="file_attach" onclick="attachFile()"><i class="fa fa-paperclip fa-lg faa-tada" aria-hidden="true"></i> ATTACH FILES</button>
                                                    <button type="submit" class="btn" id="sub">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

        <?php
            include "footer.php";
        ?>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?region=kz&language=en-US&key=AIzaSyBlfOPXQ5K64Q_W5DUCzzYyLoV0nAbiMB0&callback=initMap"
    async defer></script>

    </body>
</html>
