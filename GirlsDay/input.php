<?php
		include '../GirlsDay/connect.php';
		
				$Duck=$_POST[myPassword];
		$Quack=md5($Duck);

             $query = "INSERT INTO konto (name, password) VALUES ('$_POST[myUser]', '$Quack')";

             $result = mysql_query($query);
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		     header('Location: Registrerad.html ');   
?>