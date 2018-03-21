<!doctype html>
<html>
<head>
	<title>Process Convertion of Us Dollar to Australian Dollar </title>
</head>
<body>
   <h2 style="text-align:center">Process Convertion of Us Dollar to Canadian Dollar</h2>
   <?php
   $errors = 0;
   // validation of the US Dollar Ammount  input
   if(is_numeric($_POST['usDollar'])){
   	if(($_POST['usDollar']) > 0){
        $usDollar = $_POST['usDollar'];
		// $usDollar = round($_POST['usDollar'],2);
   	}
   	 else {
   	++$errors;
   	echo "<p>Errors: Us Dollar Amount must be greater than 0</p>\n";
   }
   }
   else{
   	  ++$errors;
   	  echo "<p>Errors: Us Dollar Amount must be a numeric value</p>\n";
   }
   
   
 	

   if($errors == 0) {
	   $canadianDollar = 1.3 * $usDollar;
	   echo "<p> The Convertion of \$$usDollar To Canadian Dollar is = Can$" . $canadianDollar . "</p>";
   //	echo "<p> The Convertion of \$$usDollar To Canadian Dollar is = Can" . ($exchangeRate * $usDollar ). "</p>";

   }

   ?>
   <p><a href="Exchange.html">Do another Conversion</a></p>
</body>
</html>
