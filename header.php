<?php
    $url = $_SERVER["REQUEST_URI"];
    $url = str_replace("/", "", $url);

    $title = [
        "about_us.php"     => "<span>WHO</span> WE ARE",
        "services.php"     => "SERVICES",
        "conferences.php"  => "CONFERENCES",
        "contact_us.php"   => "<span>CONTACT</span> US"
    ];

    $background = [
        ""                 => ["1.webp", "2.webp", "3.webp"],
        "about_us.php"     => "about_us.webp",
        "services.php"     => "services.webp",
        "conferences.php"  => "about_us.webp",
        "contact_us.php"   => "contact_us.webp"
    ];
?>

<style>
    header {
        width: 100%;
        overflow: hidden;
    }
    #subheader {

    }
    <?php if ($url!=""):?>
        #page-background {
            height: 650px;
            background-image: url("images/<?= $background[$url] ?>");
            background-position: top right;
            background-size: cover;
            background-repeat: no-repeat;
        }
    <?php endif; ?>
    #title {
        position: relative;
        top: 50%;
        font-size: 450%;
        font-weight: bold;
        color: #0008A6;
    }
    #title span span:first-child {
        font-weight: 400;
    }
    @media screen and (max-width: 1200px) {
        #title {
            font-size: 300%;
        }
        #page-background {
            height: 400px;
        }
    }

    @media screen and (max-width: 768px) {
        body {
            font-size: 85%;
        }
        #title {
          top: 60%;
          margin-left: 10px;
          font-size: 250%;
        }
        #page-background {
          height: 200px;
        }
    }

    .line {
        display: block;
        width: 4em;
        height: 4px;
        background-color: #0008A6!important;
    }

    <?php if ($url==""):?>
        .carousel-fade .carousel-inner .item {
            opacity: 0;
            transition-property: opacity;
        }
        .carousel-fade .carousel-inner .item img {
            width: 100%;
            object-fit: cover;
            height: auto;
        }

        .carousel-fade .carousel-inner .active {
            opacity: 1;
        }

        .carousel-fade .carousel-inner .active.left,
        .carousel-fade .carousel-inner .active.right {
            left: 0;
            opacity: 0;
            z-index: 1;
        }

        .carousel-fade .carousel-inner .next.left,
        .carousel-fade .carousel-inner .prev.right {
            opacity: 1;
        }

        .carousel-fade .carousel-control {
            z-index: 2;
        }

        @media all and (transform-3d), (-webkit-transform-3d) {
            .carousel-fade .carousel-inner > .item.next,
            .carousel-fade .carousel-inner > .item.active.right {
              opacity: 0;
              -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.prev,
            .carousel-fade .carousel-inner > .item.active.left {
              opacity: 0;
              -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
            }
            .carousel-fade .carousel-inner > .item.next.left,
            .carousel-fade .carousel-inner > .item.prev.right,
            .carousel-fade .carousel-inner > .item.active {
              opacity: 1;            display: block;

              -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
            }
        }

        .item-content {
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.3);
            width: 100%;
            min-height: 100%!important;
            height: 100%!important;
        }

        .item-content div:first-child {
            position: relative;
            top: 25%;
        }
        #logo-big {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 1000px;
            object-fit: contain;
        }
        #contact-us {
            display: block;
            padding: 10px 35px;
            background-color: #cc883b;
            position: absolute;
            cursor: pointer!important;
            top: 90%;
            left: 50%;
            text-decoration: none;
            transform: translate(-50%, -120%);
            transition: 0.5s ease;
            border-radius: 20px;
            font-weight: bold;
            color: #1108a5;
        }

        #contact-us:hover {
            background-color: #2d679c;
            color: #FFFFFF;
        }

        #title {
            font-size: 400%;
        }

        #title img {
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            height: auto;
        }

        p.goal {
            padding-top: 10px;
            font-weight: 400;
            font-size: 25%;
        }

        @media screen and (max-width: 1200px) {
            .carousel-fade .carousel-inner .item img {
                height: 400px;
            }
            #logo-big {
                width: 600px;
            }
            #title {
                font-size: 200%;
            }
            p.goal {
                font-size: 44%;
            }
            #contact-us {
                transform: translate(-50%, -140%);
                padding: 7px 25px;
            }
            .item-content div:first-child {
                top: 35%;
            }
        }

        @media screen and (max-width: 992px) {
            #logo-big {
                width: 400px;
            }
        }
        @media screen and (max-width: 768px) {
            .carousel-fade .carousel-inner .item img {
                height: 500px;
            }
            #logo-big {
                width: 400px;
            }
            #title img {
                display: none;
            }
            #title {
                font-size: 230%;
            }
            p.goal {
                font-size: 55%;
            }
        }

    <?php endif; ?>
</style>
<header>
    <?php
        include "navigation.php";
    ?>

    <?php if ($url!=""):?>
        <div id="subheader" class="row">
            <div id="page-background">
                <div id="title" class="container">
                    <span>
                        <p>
                            <?=$title[$url]?>
                        </p>
                        <div class="line"></div>
                    </span>
                </div>
            </div>
        </div>
    <?php else:?>
        <div id="subheader" class="row">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                    <div class="item-content">
                        <img id="logo-big" src="images/logo_big.png">
                        <a href="/contact_us.php" id="contact-us">CONTACT US</a>
                    </div>
                    <img src="images/1.webp" alt="">
                </div>
                <div class="item">
                    <div class="item-content">
                        <div class="container">
                            <div id="title" class="container">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span>
                                            <p>
                                                INFORMATION SECURITY &<br/>
                                                TECHNICAL SAFETY
                                            </p>
                                            <div class="line"></div>
                                            <p class="goal">
                                                Goal: To convey the principles and approaches of  ensuring information security in the financial organizations , regulate and create methodological documents of  executive authorities , to help in mastering practical techniques for building an effective information security system based on the world wide experience of implemention  reliable the information security .
                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="images/slide2_computer.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/contact_us.php" id="contact-us">READ MORE</a>
                    </div>
                    <img src="images/2.webp" alt="">
                </div>

                <div class="item">
                    <div class="item-content">
                        <div class="container">
                            <div id="title" class="container">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span>
                                            <p>
                                                AUTOMATED<br/>
                                                SYSTEM IMPLEMENTATION
                                            </p>
                                            <div class="line"></div>
                                            <p class="goal">
                                                Goal: The  proposed control system allows to reduce the level of complexity and risks of the project due to the simplicity and flexibility of modern automation technology.
                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="images/slide3_1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/contact_us.php" id="contact-us">READ MORE</a>
                    </div>
                    <img src="images/3.webp" alt="">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    <?php endif;?>
</header>
