<?php
		include '../GirlsDay/connect.php';

             $query = "INSERT INTO konto (name, password) VALUES ('$_POST[myUser]', md5('$_POST[myPassword]'))";

             $result = mysql_query($query);
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		     header('Location: index.php ');   
?>