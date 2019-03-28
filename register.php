<?php
// lidhja me db
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "php";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()) {
	echo "error";
}

else {
	echo "Jeni lidhur me databaze!";	
}

// i kena rujt nvariabla inputat
$usernameRegister = $_POST['usernameRegister'];
$emailRegister = $_POST['emailRegister'];
$passwordRegister = $_POST['passwordRegister'];

if (!empty($usernameRegister) || !empty($emailRegister) || !empty($passwordRegister1) || !empty($passwordRegister2) ) {

	
	 //Prepare statement
     $stmt = $conn->prepare("insert into register values('".$usernameRegister."', '".$emailRegister."', '".$passwordRegister."');");
     
     $stmt->execute();

     $rnum = $stmt->num_rows;

}

else  {
	echo "Te gjitha kolonat duhet te plotesohen";
}

?>