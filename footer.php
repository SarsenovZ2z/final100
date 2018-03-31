<?php

?>

<style>

    footer {
        overflow-y: hidden!important;
    }

    .parallax {
        background-image: url("images/nurlytau.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: fixed;
        left: 0;
        top: 200px;
        width: 100%;
        height: 700px;
        z-index: -1;
    }

    .jumbotronTransp {
        background-color: rgba(20,43,132,0.5);
        padding: 30px;
        padding-bottom: 100px;
        font-size: 21px;
        font-weight: 200;
        line-height: 1;
        color: inherit;
    }
    .tt{
        padding: 20px;
        text-align: center;
        color: white;
        font-size: 12px;
    }
    .tt h1 {
        padding-top: 35px;
        font-size: 450%;
    }

    .tt p {
        padding: 15px;
        font-size: 120%;
    }
    #sub{
        float: right;
        padding: 10px 30px;
        border: 2px solid #0008A6;
        text-decoration: none!important;
        transition: 0.5s ease;
        color: #0008A6;
    }
    #sub:hover {
        color: white;
        border-color: white;
        background-color: #41B7C4;
    }

    div.copyright {
        padding-top: 50px;
        background-color: white;
    }

    div.copyright p {
        padding-bottom: 20px;
        font-size: 16px;
        color: blue;
    }
    footer hr {
          width: 250px;
          background-color: white;
          height: 2px;
    }
    #form_contact_us div.form-group {
        margin-bottom: 6px;
    }
    #form_contact_us  input {
        height: 40px;
        padding: 5px;
    }
    #form_contact_us textarea {
        height: 130px;
    }

</style>

<footer>
    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <?php if ($url!="contact_us.php"): ?>
      <div class="jumbotronTransp">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="tt">
            <h1>CONTACT <strong>US</strong></h1>
            <hr>
            <p>If you want to know more about our services, please fill up our inquiry form so that we can respond to you as soon as possible.</p>
          </div>
          <form class="form-horizontal" id="form_contact_us" action="index.php" method="POST">
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
                <button id="sub">SUBMIT</button>
            </div>
          </form>
        </div>
          <div class="col-sm-2"></div>
        </div>

      </div>
      <div class="parallax"></div>
    <?php endif; ?>
    <div class="container-fluid text-center copyright">
        <br/>
      <p>Copyright © 2017 ITSI - Innovation Technologies in Science and Industry.<br>
          All Rights Reserved.</p>
    </div>
    <script>
        window.addEventListener("DOMContentLoaded", function() {
            var ticking = false, smoothScrollEffect = 0.1;
            var footer = document.getElementsByTagName("footer")[0];
            var content = document.getElementsByClassName("jumbotronTransp")[0];
            var background = document.getElementsByClassName("parallax")[0];
            var delta = (document.body.clientHeight - content.offsetTop)*smoothScrollEffect;

            background.style.height = (footer.clientHeight+delta)+"px";

            window.addEventListener("scroll", function(e) {
                var last = window.scrollY;
                if (!ticking && last>=content.offsetTop-window.innerHeight) {
                    window.requestAnimationFrame(function() {
                        footer_animation(last);
                        ticking = false;
                    });
                    ticking = true;
                }
            });
            function footer_animation(last) {
                background.style.top = (window.innerHeight-footer.clientHeight - (last-content.offsetTop+window.innerHeight)*smoothScrollEffect )+"px";
            }
        });
    </script>
</footer>
