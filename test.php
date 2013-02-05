<?php
echo "my first PHP script!";

$txt1="hello world!";
$txt2="What a nice day!";
echo $txt1." ".$txt2;

$t=date("H");
if ($t<"20")
 {
echo "have a good day!";
 }
else
{
echo "have a good night!";
 }
for ($i=1; $i <=5; $i++)
 {
echo "The number is ".$i."<br>";
 }

$server="localhost";
$user="root";
$password="";
$database="test";

$con=mysql_connect($server, $user, $password);

if (!$con) {
	die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully to database server' . "<br>";
mysql_select_db($database);

$query = mysql_query("SELECT namn FROM Hej");

while ($temp = mysql_fetch_array($query)){

	echo $temp["namn"] . "<br>";
}


mysql_close($con);
?>
