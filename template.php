<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Vibur' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,700,600,500,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
</head>
<body>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/slider.js"></script>
</body>
</html>
<?php
//databas connect
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "coffeetime";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//databas connect - Slut

//headern
$header = <<<END
	<div id="topnav"> 
		<div class="container-fluid col-md-10 col-centered">
			<a href="index.php"><p class="pull-left"><img src="img/logo.svg" alt="logo">CoffeeTime</p></a>
			<ul class="row col-md-5 pull-right">
				<li><a href="omoss.php">OM OSS</a></li>
				<li><a href="kontakt.php">KONTAKT</a></li>
				<li><a href="login.php">LOGGA IN</a></li>
				<li><a href="login.php">BLI MEDLEM</a></li>
				<li><a href="kundvagn.php"><div class="btn btn-default"><div class="glyphicon glyphicon-shopping-cart"></div>2500kr</div></a></li>
			</ul>
		</div>
	</div>
	<div id="bottomnav">
		<div class="container">
			<ul class="row col-md-10 col-centered">
				<li><a href="products.php?category=kaffekokare">KAFFEKOKARE</a></li>
				<li><a href="products.php?category=presskannor">PRESSKANNOR</a></li>
				<li><a href="products.php?category=kapselmaskin">KAPSELMASKIN</a></li>
				<li><a href="products.php?category=mokabryggare">MOKABRYGGARE</a></li>
				<li><a href="products.php?category=espressomaskin">ESPRESSOMASKIN</a></li>
			</ul>
		</div>
	</div>
END;
//element där slider eller bild ligger
$img = <<<END
	<div id="screenimg"></div>
END;
//content
$content = <<<END
	<div id="content" class="container"></div>
END;
//footer
$footer = <<<END
	<div id="footer" class="footer">
		<div class="container-fluid col-md-10 col-centered">
			<ul id="footermenu" class="row col-md-5 col-centered">
				<li><a href="omoss.php">Om oss</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="villkor.php">Villkor</a></li>
			</ul>
			<div id="paypal" class="row col-md-2 pull-right">
				<p>Betala säkert med</p>
				<img src="img/paypalen.png" alt="paypal">
			</div>
			<p class="row col-md-2 col-centered">&copy coffeetime.se</p>
		</div>
	</div>
END;
?>
