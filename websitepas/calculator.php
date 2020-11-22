<html>
<head>
	<title>Smart Calculator</title>
    <link rel="stylesheet" type="text/css" href="calculator.css">
</head>
<body>
<center>
<div class="kalkulator">
<form action="calculator.php" method="post">
    <label><h1 class="judul">Smart Calculator</h1></label>
    <br>
    <input type="number" name="nilai" class="nilai" placeholder="Bilangan" required>
    <br>
    <input type="submit" name="satuan" value="C ke F" class="tombol"> 
    <input type="submit" name="satuan" value="F ke C" class="tombol"> <br>
    <input type="submit" name="satuan" value="C ke K" class="tombol"> 
    <input type="submit" name="satuan" value="K ke C" class="tombol"> 
    
<br>
                <input type="submit" name="sub" value="sin" class="tombol">
                <input type="submit" name="sub" value="cos" class="tombol">
                <input type="submit" name="sub" value="tan" class="tombol">
                <input type="submit" name="sub" value="log" class="tombol">
                </form>
                
    <?php
	if(isset($_POST['satuan'])){

		$temperature = $_POST['nilai'];
		$units = $_POST['satuan'];
		
		if ($units == "C ke F") {
                $hasil = $temperature * 9 / 5 + 32;
        }
        elseif ($units == "F ke C") {
            $hasil = ($temperature - 32) * 5 / 9;
        }
        elseif ($units == "C ke K") {
            $hasil = $temperature + 273.15;
        } 
        elseif ($units == "K ke C") {
            $hasil = $temperature - 273.15; 
        } 

        elseif ($temperature == "") {
            echo "MOHON DI ISI NILAINYA TERLEBIH DAHULU!!!";
        }

        
    }

    if(!empty($_POST['sub']) && !empty($_POST['nilai']) )
    {
            $derajat=$_POST['nilai'];
            $units1=$_POST['sub'];
            if($units1=="cos"){
                $hasil=cos($derajat);
            }
            else if($units1=="sin"){
                $hasil=sin($derajat);
            }
            else if($units1=="tan"){
                $hasil=tan($derajat);
            }
            else if($units1=="log"){
                $hasil=log($derajat);
            }
        else{
            echo "MOHON DI ISI NILAINYA TERLEBIH DAHULU!!!";
    }
}
	?>
	
    <input type="text" value="<?php echo @$hasil; ?>" class="hasil" placeholder="hasil" required/>

<a href="index.php"><img src="quit.png" alt="" class="quit"></a>

                
</div>
</center>
</body>
</html>