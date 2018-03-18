<?php
    $url = $_SERVER["REQUEST_URI"];
    $url = str_replace("/", "", $url);
?>

    <style>
        nav {
            background: rgba(255, 255, 255, 0.8)!important;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.7)!important;
            border-top: 0px solid rgba(47, 46, 46, 1)!important;
            border-bottom: 0px solid rgba(47, 46, 46, 1)!important;
        }
        nav a {
            color: #0008A6!important;
        }
        .navbar-brand {
            height: 100%;
            background-image: url(images/logo.png);
            background-repeat: no-repeat;
            background-position: top;
            font-size: 6pt;
        }

        .navbar-brand div {
            margin-top: 30px;
            margin-bottom: -15px;
        }

        li.active a {
            color: #0F4C85!important;
            background: inherit!important;
            box-shadow: none!important;
        }

        #navbar ul {
            margin-top: 10px;
        }

        #navbar ul li a {
            transition: color 0.3s ease-in-out;
        }

        #navbar ul li:not(.active) a:hover {
            color: #41B7C4!important;
        }

        #hidden-dd {
            padding-right: 25px;
            margin-left: -25px;
            background: inherit!important;
            border: none!important;
            box-shadow: none!important;
        }

        li.services-dd-li {
            z-index: 5;
            float: left!important;
        }
        @media screen and (max-width: 768px) {
            #hidden-dd {
                margin-left: -30px;
            }
        }

    </style>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button id="mobile-nav" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
              <div>INNOVATIVE TECHNOLOGIES IN SCIENCE AND INDUSTRY</div>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?=($url==""?"active":"")?>"><a href="/">HOME</a></li>
            <li class="<?=($url=="about_us.php"?"active":"")?>"><a href="/about_us.php">ABOUT US</a></li>
            <li class="<?=($url==""?"active":"")?> services-dd-li">
              <a href="/services.php" id="services-dropdown">SERVICES</a>
            </li>
            <li class="dropdown">
                <a href="#" id="hidden-dd" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span id="" class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li class=""><a href="#">INFORMATION SECURITY OF BANKS</a></li>
                  <li class=""><a href="#">AUTOMATED SYSTEM IMPLEMENTATION...</a></li>
                  <li class=""><a href="#">INDUSTRIAL TRAINING SCHOOL</a></li>
                  <li class=""><a href="#">MATHEMATICAL MODEL...</a></li>
                </ul>
            </li>
            <li><a href="/conferences.php">CONFERENCES</a></li>
            <li><a href="/contact_us.php">CONTACT US</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <script>
        window.addEventListener("load", function() {
            document.getElementById("services-dropdown").onmouseover = function() {
                jQuery("#hidden-dd").trigger('click.bs.dropdown');
            };
        });

    </script>
