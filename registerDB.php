<html>
<head><title>Registration information in DB BShop</title></head>
<body>
<h3>Fill the table registration in database bshop</h3>
	<?php
		$server 	= "localhost";  
		$user   	= "root";  
		$pass   	= "";
		$salutation	= $_POST["salutation"];
		$firstname	= $_POST["firstname"];
		$lastname	= $_POST["lastname"];
		$email		= $_POST["email"];
		$username 	= $_POST["username"];
                $password	= $_POST["password"];
		$confirmpassword= $_POST["confirmpassword"];
		

		$verbindung = mysql_connect($server, $user, $pass)
			or die ("No Connection to Server....");
		
                mysql_select_db("bshop")
			or die ("Database couldnot be connected.");
		$sql  = "INSERT INTO registration (registration_salutation, registration_firstname, registration_lastname, registration_email, registration_username, registration_password, registration_confirmpassword)";
		$sql = " VALUES ('$salutation', '$firstname', '$lastname', '$email', '$username','$password', '$confirmpassword' )";
		$abfrage = mysql_query($sql);
			if($abfrage)
				{
				echo "<p>Thank you, Your order has been placed....</p>";
				}
			else
				{
				echo "<p>Failure...SQL Script</p>";
				}
		mysql_close($verbindung);
	?>
</body>
</html>
