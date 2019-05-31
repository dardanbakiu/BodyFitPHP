<?php session_start() ?>
<?php include 'loja.php' ?>
<!DOCTYPE>
<html xmlns="https://www.w3.org/1999/xhtml/">
<head>
<meta charset="utf-8">
<title> LOJA</title>
</head>
<body>
	<?php 
		if(isset($_SESSION['username']) == FALSE) : ?>
		<form method="post">
		<h3> Shtypni emrin tuaj per te luajtur! </h3>
		<label for = "username"> Username: </label>
		<input type="text" name = "username" id = "username" />
		<input type="submit" name="submit" value = "Le te luajme!" />
		
	</form>
	<?php else : ?>

		<h3> Miresevini perseri <?= $_SESSION['username']?> </h3>
		<div id = "loja">


			<?php loja() ?>
	</div>
	<?php endif; ?>
	<h3>
		<span><a href = "?logout = true"/> Dil </span> </h3>
<style type="text/css">
		
body {
	background-color: #FAFAD2; 
	font-family: sans-serif, Serif; 
}

h3 {
	text-align: center;
	font-size: 25px;
	font-weight: normal;
	font-style: serif;
}

h2{
	text-align: center;
	font-weight: normal;
	font-style: serif;
	font-size: 20px;
}

h3 span a{
	font-size: 20px;
	text-align: bottom;
	color: #444;
	text-decoration: none;
	font-weight: normal;

}

h3 span a: hover {}

#loja a {
	display: inline-block;
	width: 140px;
	color: #333;
	font-size: 18px;
	margin: 10px;
}

#loja a img{
	border: 3px dashed #555;
	margin-left: 400px;
} 
#cc{
	text-align: center;
}

</style>
</body>
</html>
