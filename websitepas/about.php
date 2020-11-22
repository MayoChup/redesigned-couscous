<?php
?>
<html>
    <head>
        <title>About</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel = 'stylesheet' type = 'text/css' href = 'style.css' />
        <link href="assets/let-it-snow.css" rel="stylesheet" type="text/css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body class="bg">
    <img class="animasikarakter" src="biru.png" alt="" height="60px" width="50px">
        <div class="container col-sm-12">
            <div class="crewmateoverlay d-flex justify-content-center">
                <div class ="slide slide1"><img src="devlin.png" alt="" height="350px"></div>
                <div class ="slide slide2"><img src="jason.png" alt="" height="350px"></div>
                <div class ="slide slide3"><img src="rico.png" alt="" height="350px"></div>
                <div class ="slide slide4"><img src="david.png" alt="" height="350px"></div>
            </div>
            <div class="crewmate row d-flex justify-content-center">
                <div class="bungkusgambarcrew" color="slide1"><div class="gambarcrewmatebiru"><img src="biru.png" alt="" height="270px" width="200px"></div></div>
                <div class="bungkusgambarcrew" color="slide2"><div class="gambarcrewmateijo"><img src="green.png" alt="" height="270px" width="200px"></div></div>
                <div class="bungkusgambarcrew" color="slide3"><div class="gambarcrewmateorange"><img src="orange.png" alt="" height="270px" width="200px"></div></div>
                <div class="bungkusgambarcrew" color="slide4"><div class="gambarcrewmatepink"><img src="pink.png" alt="" height="270px" width="200px"></div></div>
            </div>
        </div>
    <script>
        $(".bungkusgambarcrew").mouseenter(function(){
        $(".slide").hide()
        var color = $(this).attr("color");
        $(".slide").each(function(k,v){
            if($(v).hasClass(color)){
                $(v).show();
            }
				})
    })
    </script>
    </body>
</html>