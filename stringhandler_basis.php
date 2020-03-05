<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Ma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>
	 <body>
		 <?php
		  $input3 = "";//declareer nieuwe var waarde empty string
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
				// $input3 =  $_GET['input3'];
			}
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
				// $input3 = "";
				}
			// "schrijf hier de benodigde code"
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Dean Hendriks MG1D</legend>
				 <input type = "text" name = "input1"  placeholder = "string 1"><br>
				 <input type = "text" name = "input2"   placeholder = " string 2">
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php
					// "schrijf hier de benodigde code"
			?><ul>
					<li class="showSpaces">Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
					<li class="showSpaces">Ingevoerde string 2:  <?php  echo $input2;  ?> </li>
					<li class="showSpaces">String 1 getrimd trim():  <?php  echo trim($input1);  ?> </li>
					<li class="showSpaces">String 2 getrimd trim():  <?php  echo trim($input2);  ?> </li>
					<li class="showSpaces">String 3 is de concatenation van string 1 en string 2:  <?php  print $input3 = $input1.$input2;  ?> </li>
					<li class="showSpaces">De lengte van string 3 is:  <?php  echo strlen($input3);  ?> </li>
					<li class="showSpaces">Zoeken naar spaties. Er zit een spatie op positie:  <?php echo strpos($input3 ," ");   ?> </li>
					<li class="showSpaces">Zoeken naar @. Er zit een @ op positie  <?php  echo strpos($input3 ,"@");  ?> </li>
					<li class="showSpaces">Zoeken naar "." Er zit een "." op positie  <?php  echo strpos($input3 ,".");  ?> </li> 
					<li class="showSpaces">Zoek naar substring "PHP" vervang dit door "NodeJS": <?php print str_replace("PHP","NodeJS",$input3); ?> </li>
                    <li class="showSpaces">Wijzig de eerste letter van string 1 en 2 naar hoofdletter: <?php print ucfirst($input3); ?> </li>
                    <li class="showSpaces">Alles in hoofdletters: <?php print strtoupper($input3); ?> </li>
					
				</ul>
				<hr>
				<ol>
				<li>Opdracht:<br> Stringhandler. Maak de PHP code voor <a href="http://schw.hosts.ma-cloud.nl/stringhandler/stringhandler.php">Stringhander<a>
				<li>Hoe moet jij inleveren?: <br>
						1) Link naar de werkende code in jouw portfoliomap bij Ma-cloud<br>
						2) Link naar jouw code bij GITHUB</li>
				<li>Bonus opdracht: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.</li>
				<li>Bonus opdracht: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden</li>
				</ol>
			</div>
	 </body>
</html>
