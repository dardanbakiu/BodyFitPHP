<head>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<?php 
	include 'lidhjadb.php';

	$emri = $_GET['emri'];
	$email = $_GET['email'];
	$pershkrimi = $_GET['pershkrimi'];

	//ki me i shti ne databaz

	$insert = $conn->query('insert into team values("'.$emri.'","'.$email.'","'.$pershkrimi.'")');

	

	//nese krejt me sukses = echo "success"
	//nese krejt pa sukses = echo "no-success"

	

?>
