<!-- Kom ihåg att logga in till databasen först! -->
<?php
        include '../GirlsDay/connect.php';
		
         $query = "SELECT name FROM konto WHERE name='$_POST[myUser]' AND password='$_POST[myPassword]'";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();	
		 session_unset();
         
		 if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: inloggad.php');
		 }
		 else {
			  header('Location: login.html');
		 }
		
?>