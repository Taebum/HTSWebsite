<?php
include '../GirlsDay/connect.php';
session_start();
if(!isset($_SESSION['session_user'])){
	header('Location: login.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="Lena" type="text/css" href="../CSS/Lena.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>Daisy</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner-center" ><img src="banner.jpg" alt="banner" width="994" height="518"> </div>
            </div>
            <div id="left">
					<div class="dokument-item">
					<br>
						<ul>
<li><a href="info.html"> Members </a></li>
<br>
<li><a href="music.html"> Songs/Albums </a></li>
<br>
<li><a href="awards.html"> Awards </a></li>
<br>
<li><a href="biography.html"> Biography </a></li>
<br>
<li><a href="pictures.html"> Pictures </a></li>
<br>
<li><a href="sok.php"> Sök användarnamn </a></li>
</ul>
<center><br><br><form action="logout.php" method="post">
<input type="submit" value="Logga ut">
</form></center>
					</div>
            </div>
            <div id="center">

							<div class="meny">
				<br>
                <div id="info">
				<h1 class="dokument-item-header"> <p id = "infoSok">Sök på användarnamn! <br />	</h1>
				
</div>
								<h5 class="plot"><form action="sok.php" method="post" >

<input name="soktAnv" id="soktAnv" type="text" value="" /> <input id="btnSok" type="submit" value="S&ouml;k" />

</p>

</form>
<?php
if (isset($_POST['soktAnv'])) {
$soktVar = $_POST['soktAnv'];


// mysql injections???????
$soktVar = stripslashes($soktVar);
$soktVar = mysql_real_escape_string($soktVar);


$query = "SELECT name FROM konto WHERE name= '$soktVar' OR name LIKE '%$soktVar%'";
//echo '<em> ' . $query . ' </em>';
$result = mysql_query($query);
if ($result === false) {
echo "<strong> Error when you asked a question to your databas. " . mysql_errno . " : <br />" . mysql_error . "</strong>";
}
$num=mysql_numrows($result);
if($num==0) {
echo '<p id="txtSok">Finns ingen sån användare <br /> S&ouml;k p&aring; en annan anv&auml;ndare.</p>';
}
else {

for ($i=0;$i<$num;$i++) {
$temp = mysql_fetch_array($result);

echo $temp['name'] . "<br />";
}

}
}
?>
<br /><br />
</div>
</div>
            <div id="right">
					<br><br><br><br><br><br><br><br><br><br><br><br>
            </div>

			<div id="footer">
				<p> &copy; 2013 Ditt namn här. Detta är en fotnot# 
				</p>
			</div>
        </div>
    </body>
</html>