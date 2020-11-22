<?php if(!empty($_POST['text']) && !empty($_POST['txtcolor'])  && !empty($_POST['bgcolor']) && !empty($_POST['ukuran'])){
          $txt = $_POST['text'];
          $fsize = $_POST['ukuran'];
          $fclr = $_POST['txtcolor'];
          $bgclr = $_POST['bgcolor'];
        }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shio test</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <style media="screen">
       .nomp{
         margin:0;
         padding:0;
       }
       .row {
          margin: auto;
        }
     </style>
  </head>
  <body>
    <div class="container bg-light">
      <div class="row nomp">
        <div class="col-xs-12 w-100">
          <form class="form" method="post">
            <div class="row">
              <div class="col-12 col-xs-8">
                <label for="">Input Text</label>
                <br>
                <input type="text" name="text" value="<?php (!empty($txt)?print($txt):'')?>">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-xs-12">
                <label for="">Input Ukuran</label>
                <br>
                <input type="number" name="ukuran" value="<?php (!empty($fsize)?print($fsize):'')?>">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-xs-12">
                <label for="txtcolor">Select your favorite color:</label>
                <br>
                <input type="color" id="txtcolor" name="txtcolor" value="#000000">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-xs-12">
                <label for="bgcolor">Select your favorite color:</label>
                <br>
                <input type="color" id="bgcolor" name="bgcolor" value="#ff0000">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-xs-12 center-xs">
                <button type="submit" class="bg-success" name="button"> <i class="fas fa-paper-plane left"></i> Submit </button>
              </div>
            </div>
          </form>

          <div class="row w-100">
            <div class="col-xs-12 w-100" style="<?php (!empty($fclr) && !empty($bgclr) && !empty($fsize)?print('display:block;background:'.$bgclr.';color:'.$fclr.";font-size:".$fsize."px"):print('display:none'))?>">
              <?php print($txt); ?>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
  </body>
</html>
