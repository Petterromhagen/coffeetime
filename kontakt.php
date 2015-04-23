<?php

//unkluderar template
include "template.php";

//skapar en egen img
$img = <<<END
	<div id="screenimg">
	<div id="overlay"></div>
	<div class="row col-md-2 col-centered">
	<h1 class="slideh1">Kontakt</h1>
	</div>
	<img class="screenimg" src="img/contact.jpg" alt="kontaktbild">
	
	</div>
END;

//content
$content = <<<END
	<div id="content" class="container">
		<form class="col-md-7 col-centered" action="sendmail.php" method="post">
			<p>Om du har frågor så får du gärna skicka ett mail till oss via formuläret nedan.</p>
			<label >NAMN</label><input class="form-control" type="text" name="name"><br>
			<label>E-POST</label><input class="form-control" type="text" name="email"><br>
			<label>MEDDELANDE</label><textarea class="form-control" name="msg" rows="7"></textarea>
			<input class="btn btn-success" type="submit" value="SKICKA">
		</form>
	</div>
END;

//printar ut alla element
echo $header;
echo $img;
echo $content;
echo $footer;
 
?>