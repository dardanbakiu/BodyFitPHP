<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="icon.png"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Credit Card Form</title>
    <script type="text/javascript" scr="loader.js"></script>
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="CCform.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="requirements.css">

	<style type="text/css">
		@font-face {
  			font-family: myFirstFont;
  			src: url(sansation_light.woff);
		}

		div {
  		font-family: myFirstFont;
		}
	</style>
	<title>REQUIREMENTS</title>
	    <script>
	            function Count() {
	            if(typeof(Storage)!==undefined)
	            {
	                if (sessionStorage.clickcount)
	                {
	                sessionStorage.clickcount=Number(sessionStorage.clickcount)+1;
	                
	            }
	            else
	            {
	                sessionStorage.clickcount = 1;
	            }
	        document.getElementById("result").innerHTML=" You have submited this form " + sessionStorage.clickcount + " time(s) within the session!" }
	            else
	            {
	            document.getElementById("result").innerHTML=" We're sorry but your browser doesn't support session storage"
	            }
	            }
        </script>

</head>
<body>
 <!--  forma duhet te kete : emrin e pronarit te CC , numrin e CC , daten e skadimit, CVV-->

 <div class="CCform">
     <div class="header">
         <h1> Confirm Purchase </h1>

        </div>
        <div  class="pagesa">
            <form method="post"> 
                <div class="form-group pronari">
                    <label for="pronari">Owner</label>
                    <input type="text" class="form-control" id="pronari" name="owner">

                </div>
                <div class="form-group CVV">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv">
                
                </div>
                <div class="form-group" id="card-number-field">
                    <label  for="cardNumber">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" name="card_number">
                </div> 
                <div class="form-group" id="data_skadimit">
                    <label>Expiration Date</label>
                    <select name="month">
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="08">July</option>
                        <option value="09">August</option>
                        <option value="10">September</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    
                    </select>
                    
                    <select name="viti">
                        <option value="01">2018</option>
                        <option value="02">2019</option>
                        <option value="03">2020</option>
                        <option value="04">2021</option>
                        <option value="05">2022</option>
                        <option value="06">2023</option>
                    
                    </select>
            
                </div>
                <div class="form-group" id="credit_cards">
                        <img src="visa.jpg" id="visa">
                        <img src="mastercard.jpg" id="mastercard">
                    </div>
                    <div  class="form-group" id="pay-now">
                        <p><button type="Submit" style="padding-left: 40%; padding-right:40%" id="butoni" onclick="Count()" type="button">  
                            <svg height="15" width="80">
                              <text x="0" y="15" fill="#165D34">Submit</text>
                              Sorry, your browser does not support inline SVG.
                            </svg>   
                        </button>
                    </p>
                <div id="result"> </div>
                    </div>
            </form>

            <p id="register_alert"> </p>

        </div>
 </div>




<!-- ketu fillon puna me php dhe db -->

 <?php
// lidhja me db
include 'lidhjadb.php';

if(mysqli_connect_error()) {
  echo "error";
}

else {


// i kena rujt nvariabla inputat

if (isset($_POST['owner']) && isset($_POST['cvv']) && isset($_POST['card_number']) && isset($_POST['month']) && isset($_POST['viti']))
{

$owner = ($_POST['owner']);
$cvv = $_POST['cvv'];
$card_number = $_POST['card_number'];
$month = $_POST['month'];
$viti = $_POST['viti'];


  if (!empty($owner) || !empty($cvv) || !empty($card_number) || !empty($month)|| !empty($viti)) 
    {  //Prepare statement
         $stmt = $conn->prepare("insert into buy(Owner,cvv,number,expmonth,expdate) values('".$owner."','".$cvv."', '".$card_number."', '".$month."','".$viti."');");
         $stmt->execute();
         $rnum = $stmt->num_rows;

         //  echo 
         // "<script>
         //    document.getElementById('result').innerHTML = 'You have submited this form';
         //    location.replace('http://localhost:1998/gitbodyfit/training.php');
         // </script>"; 
         // new
         if (!isset($_SESSION["paid"]))
                        {
                          $username = $_COOKIE['logged'];

                          
                          $_SESSION['paid'] = $username;
                          $sessionn = $_SESSION['paid'];
                          session_start();
                        }


                      }

                  else 
                  {
                      echo 
                       "<script>
                          document.getElementById('register_alert').innerHTML = 'Keni shenuar te dhenat gabim';
                          document.getElementById('register_alert').style.display = 'block';
                       </script>"; 
                  }
        
                  
        // perfundon new
    }

  else  
    {
      echo 
         "sorry"; 
    }
}

?>

<!-- KETU perfundon puna me php -->
  
</body>
</html>