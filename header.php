<?php
    $url = $_SERVER["REQUEST_URI"];
    $url = str_replace("/", "", $url);

    $title = [
        "about_us.php"     => "WHO WE ARE",
        "services.php"     => "SERVICES",
        "conferences.php"  => "CONFERENCES",
        "contact_us.php"   => "CONTACT US"
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
        min-height: 75%!important;
        height: 75%!important;
    }
    #subheader {
        min-height: 100%!important;
        height: 100%!important;
        <?php if ($url!=""):?>
            background-image: url("images/<?= $background[$url] ?>");
            background-position: top;
            background-size: 100% auto;
            background-repeat: no-repeat;
        <?php endif; ?>
        margin: 0!important;
    }

    #title {
        position: relative;
        top: 20%;
        font-size: 450%;
        font-weight: bold;
        color: #0008A6;
    }

    @media screen and (max-width: 1200px) {
        #title {
            top: 35%;
            font-size: 300%;
        }
    }

    @media screen and (max-width: 768px) {
      header {
          min-height: 35%!important;
          height: 35%!important;
      }
      #title {
          top: 35%;
          font-size: 250%;
      }
    }

    #line {
        display: block;
        width: 4em;
        height: 4px;
        background-color: #0008A6;
    }

    <?php if ($url==""):?>
        #slider {
            min-height: 100%!important;
            height: 100%!important;
        }
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

        /*
        WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
        Need to override the 3.3 new styles for modern browsers & apply opacity
        */
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
            padding-top:
            background-color: rgba(255, 255, 255, 0.4);
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
            padding: 10px 35px 10px 35px;
            background-color: #cc883b;
            position: absolute;
            cursor: pointer!important;
            top: 90%;
            left: 50%;
            text-decoration: none;
            transform: translate(-50%, -120%);
            transition: 1s ease;
            border-radius: 20px;
            font-weight: bold;
            color: #1108a5;
            z-index: inherit;
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

        #line {
            display: block;
            width: 4em;
            height: 4px;
            background-color: #0008A6;
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
            #contact-us {
                transform: translate(-50%, -160%);
                padding: 5px 15px 5px 15px;
            }
            .item-content div:first-child {
                top: 35%;
            }
            #title {
                font-size: 200%;
            }
            p.goal {
                font-size: 35%;
            }
        }

        @media screen and (max-width: 992px) {
            #logo-big {
                width: 400px;
            }
            #title {
                font-size: 150%;
            }
            p.goal {
                font-size: 50%;
            }
        }
        @media screen and (max-width: 768px) {
            .carousel-fade .carousel-inner .item img {
                height: 500px;
            }
            #logo-big {
                width: 300px;
            }
            #title {
                font-size: 140%;
            }
            #title img {
                display: none;
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
            <div id="title" class="container">
                <span>
                    <p>
                        <?=$title[$url]?>
                    </p>
                    <div id="line"></div>
                </span>
            </div>
        </div>
    <?php else:?>
        <div id="subheader" class="row">
            <div id="slider">
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
                                                <div id="line"></div>
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
                                                <div id="line"></div>
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
        </div>
    <?php endif;?>
</header>
