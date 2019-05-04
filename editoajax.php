<head>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php 
	include 'lidhjadb.php';

	$emri = $_GET['emri'];
	$lastname = $_GET['lastname'];
	$city = $_GET['city'];
	$email = $_GET['email'];
	$password = $_GET['password'];

	//ki me i shti ne databaz

	$insert = $conn->query('update register set name = "'.$emri.'"     ');
	$insert = $conn->query('update register set lastname = "'.$lastname.'"     ');
	$insert = $conn->query('update register set city = "'.$city.'"     ');
	$insert = $conn->query('update register set email = "'.$email.'"     ');
	$insert = $conn->query('update register set password = "'.$password.'"     ');
	

	//nese krejt me sukses = echo "success"
	//nese krejt pa sukses = echo "no-success"

	

?>
