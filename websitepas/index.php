<?php
?>
<html>
    <head>
				<title>Home</title>
				<script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel = 'stylesheet' type = 'text/css' href = 'style.css' />
        <link href="assets/let-it-snow.css" rel="stylesheet" type="text/css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script src="assets/let-it-snow.min.js"></script>
        <style>
        * {
          box-sizing: border-box;
        }

        html,body {
          width: 100%;
          height: 100%;
          margin: 0;
              overflow: hidden;
          padding: 0;
        }

        .let-it-snow {
          width: 100%;
          height: 100%;
          float: left;
          background: #000;
        }

        .button {
              display: block;
          position: relative;
          z-index: 1;
          margin: 400px auto 0;
          border-radius: 10px;
          width: 480px;
          background: #38b6cd;
              color: #fff;
              text-align: center;
              font-family: Helvetica, Arial, sans-serif;
              font-size: 1.5em;
              line-height: 3.5em;
              font-weight: bold;
        }
        </style>
    </head>
	<body class="let-it-snow">
  <img class="animasikarakter" src="biru.png" alt="" height="60px" width="50px">
		<div class="container">
			<div class="row">
				<div class ='col-sm-12'>
					<div class = "overlayshio d-flex justify-content-center">
						<div class="slide slide1">
							<img src="intro-shio1.png"
							alt="" width ="auto" height = "350">
						</div>
						<div class="slide slide2">
							<img src="intro-wordart.png"
							alt="" width ="auto" height = "350">
						</div>
						<div class="slide slide3">
							<img src="intro-kalkulator.png"
							alt="" width ="auto" height = "350">
						</div>
					</div>
						<div>
							<a href="shio.php"><div class ='divshio col-sm-12 center-sm' color = "slide1"> <img src="tombol-shio.png"  alt=""> </div></a>
							<a href="wordart.php"><div class ='divshio col-sm-12 center-sm' color = "slide2"> <img src="tombol-wordart.png" alt=""> </div></a>
							<a href="calculator.php"><div class ='divshio col-sm-12 center-sm' color = "slide3"> <img src="tombol-kalkulator.png" alt=""> </div></a>
						</div>
	</div>
		</div>
			</div>
			<a href="about.php"><div class ='profile'><img src="button-profile2.png" alt=""></div></a>

      <script>
        $.letItSnow('.let-it-snow', {
            stickyFlakes: 'lis-flake--js',
            makeFlakes: true,
            sticky: true
        });
        </script>
<script>
$(".divshio").mouseenter(function(){
        $(".slide").hide()
        var color = $(this).attr("color");
        $(".slide").each(function(k,v){
            if($(v).hasClass(color)){
                $(v).show();
            }
				})
    })
// $(".overlayshio").hover(function(){
//     $(".slide").hide();
// })
</script>
		</body>
</html>
