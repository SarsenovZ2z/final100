<?php

?>

<style>
.suret
{
   background-image: url("images/fon225.jpg");
   background-attachment: fixed;
   /* filter: brightness(50%); */
}
.jumbotronTransp {
       padding: 30px;
       margin-bottom: 10px;
       font-size: 21px;
       font-weight: 200;
       line-height: 1;
       color: inherit;
       background-color: rgba(0,0,0,0.5);
       padding-bottom: 100px;
    }
    .tt{
      text-align: center;
      color: white;
    }
    #sub{
          position: absolute;
          right: 15px;
          transition: 0.5s ease;
        }

      #sub:hover{
        background-color: #4fa048;
        color: white;
        border-color: white;
      }
</style>

<footer>

    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <div class="suret">
      <div class="jumbotronTransp">
        <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="tt">
            <h1><span style="font-weight: 400">CONTACT </span>US</h1>
            <hr>
            <h5><small style="color:white">If you want to know more about our services, please fill up our inquiry form so that we can respond to you as soon as possible.</small></h5>
          </div>
          <form>
            <div class="form-group">
            <textarea class="form-control" rows="1" id="name" placeholder="NAME*"></textarea><br>
            <textarea class="form-control" rows="1" id="email" placeholder="EMAIL ADDRESS*"></textarea><br>
            <textarea class="form-control" rows="1" id="subject" placeholder="SUBJECT"></textarea><br>
            <textarea class="form-control" rows="5" id="comment" placeholder="MESSAGE"></textarea>
            </div>
            <button id="sub" type="submit" class="btn">Submit</button>
          </form>
        </div>
          <div class="col-sm-2"></div>
        </div>

      </div>
    </div>

<br><br><br>
    <div class="container-fluid text-center">
      <p>Copyright © 2017 ITSI - Innovation Technologies in Science and Industry.<br>
          All Rights Reserved.</p>
    </div>
    </footer>
