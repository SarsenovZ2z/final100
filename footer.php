<?php

?>

<style>
  .jumbotronTransp {
     background-image: url("images/fon225.jpg");
         padding: 30px;
         margin-bottom: 10px;
         font-size: 21px;
         font-weight: 200;
         line-height: 1;
         color: inherit;
         background-color: transparent;
      }
  .tt{
    text-align: center;
  }
  #sub{
        position: absolute;
        right: 15px;
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
          <h1>CONTACT US</h1>
          <hr>
          <h5>If you want to know more about our services, please fill up our inquiry form so that we can respond to you as soon as possible.</h5>
        </div>
        <form>
          <div class="form-group">
          <textarea class="form-control" rows="1" id="name" placeholder="NAME*"></textarea><br>
          <textarea class="form-control" rows="1" id="email" placeholder="EMAIL ADDRESS*"></textarea><br>
          <textarea class="form-control" rows="1" id="subject" placeholder="SUBJECT"></textarea><br>
          <textarea class="form-control" rows="5" id="comment" placeholder="MESSAGE"></textarea>
          </div>
          <button id="sub" type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
        <div class="col-sm-2"></div>
      </div>

    </div>

<br><br><br>
    <div class="container-fluid text-center">
      <p>Copyright © 2017 ITSI - Innovation Technologies in Science and Industry.<br>
          All Rights Reserved.</p>
    </div>
    </footer>
