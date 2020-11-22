<?php
?>
<html>
    <head>
				<title>WEBSITE GA JELAS</title>
				<script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
        <link rel = 'stylesheet' type = 'text/css' href = 'style.css' />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
	<body class ="bodybackground">
		<div class="container">
			<div class="row">
				<div class ='col-sm-12'>
					<div class = "overlayshio">
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
							<a href="shio.php"><div class ='divshio col-sm-12 center-sm' color = "slide1"> <span>SHIO GENERATOR</span> </div></a>
							<a href="wordart.php"><div class ='divshio col-sm-12 center-sm' color = "slide2"> <span>WORDART GENERATOR</span> </div></a>
							<a href="calculator.php"><div class ='divshio col-sm-12 center-sm' color = "slide3"> <span>KALKULATOR SCIENCE</span> </div></a>	
						</div>
	</div>
		</div>
			</div>
			<a href="about.php"><div class ='profile'> <span> PROFILE</span> </div></a>
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
$(".overlayshio").hover(function(){
    $(".slide").hide();
  })
</script>
		</body>
</html>
