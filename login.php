<?php 
// lidhja me db
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "php";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


// i kena rujt nvariabla inputat
$usernameLogin = $_POST['usernameLogin'];
$passwordLogin= $_POST['passwordLogin'];

$selectUsername = $conn->query("select username from register where username ='".$usernameLogin."';");
$selectPassword = $conn->query("select password from register where password ='".$passwordLogin."';");


if (( $selectUsername->num_rows > 0) &&( $selectPassword->num_rows > 0)) 
{

		echo "jeni loguar";
	}
else 
{
	echo "Na falni";
}


?>