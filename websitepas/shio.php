<?php
$shio = null;
if(!empty($_GET['year'])){
  $name = $_GET['name'];
  $year = (int)$_GET['year'];
  $raw_year = $year;
  $year -=4;
  $year = $year%12;
  $arr_shio = array("Tikus",
                    "Kerbau",
                    "Macan",
                    "Kelinci",
                    "Naga",
                    "Ular",
                    "Kuda",
                    "Kambing",
                    "Monyet",
                    "Ayam",
                    "Anjing",
                    "Babi");
  $shio = $arr_shio[$year];
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type ="text/css" href="style.css"/>
    <meta charset="utf-8">
    <title>Shio test</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body class="bg">
    <div class="container" style="margin-top:100px; background-color:blue;">
      <div class="row">
        <div class="col-xs-12 w-100" style="height:500px;">
          <form class="form" method="get">
            <div class="inputform .justify-content-start w-50" style="background-color:red; padding-left:50px;">
                <div class="row" >
                <div class="col-xs-12">
                    <label for="">Name</label>
                    <input type="text" name="name" value="<?php (!empty($name)?print($name): ''); ?>" placeholder="Isi Nama Anda" required>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12">
                    <label for="">Tahun </label>
                    <input type="text" name="year" value="<?php (!empty($raw_year)?print($raw_year): print(date("Y"))); ?>" placeholder="Isi Tahun Kelahiran Anda" required>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12 center-xs">
                    <button type="submit" class="bg-success" name="button"> <i class="fas fa-paper-plane left"></i> Submit </button>
                </div>
                </div>
                </div>
          </form>
          <?php if(!empty($_GET['year']) && !empty($_GET["name"]) ){ ?>
        <div class="hasilform .justify content-end w-50" style="padding-left:50px">
            <div class="row">
                <div class="col-xs-12">
                Nama : <?php echo $name ?>
                <br>
                Tahun : <?php echo $raw_year ?>
                <br>
                Shio : <?php echo $shio ?>
                </div>
            </div>
        </div>
          <?php } ?>
        </div>
          </div>
    </div>

    

  </body>
</html>

