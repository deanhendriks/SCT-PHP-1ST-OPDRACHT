# SCT-PHP-1ST-OPDRACHT
	  $input3 = "";//declareer nieuwe var waarde empty string
  
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
