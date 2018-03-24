<?php

?>

<style>

footer {
    overflow-y: hidden!important;
}

body {
    /* -webkit-perspective: 600px;
    perspective: 600px; */
}

.parallax {
    background-image: url("images/nurlytau.png");
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
   /* translateZ(-600px) */
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
        background-color: white;
    }

    div.copyright p {
          font-size: 14px;
          color: blue;
    }
    footer hr {
          width: 250px;
          background-color: white;
          height: 2px;
    }


</style>

<footer>

    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <div class="jumbotronTransp">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="tt">
            <h1><span style="font-weight: 400">CONTACT </span>US</h1>
            <hr>
            <p>If you want to know more about our services, please fill up our inquiry form so that we can respond to you as soon as possible.</p>
          </div>
          <form class="form-horizontal">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="NAME*"/ required>
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
                <button id="sub" type="submit">SUBMIT</button>
            </div>
          </form>
        </div>
          <div class="col-sm-2"></div>
        </div>

      </div>
    <div class="container-fluid text-center copyright">
        <br/>
      <p>Copyright © 2017 ITSI - Innovation Technologies in Science and Industry.<br>
          All Rights Reserved.</p>
    </div>
    <div class="parallax">
    </div>
</footer>
