<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
            <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
        <title>Online training Section </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="membership.css">
        
         <link rel="shortcut icon" href="icon.png"/>
         
       
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
         integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
         crossorigin="anonymous">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script src="gameScript.js"></script>
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
    </head>
    <body>
        
                <header>
                        <hr id="vija">
                        
                        <div class="permbajtja">
                            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                          <img src="logo1.png" alt="Logoja" style="width:200px;height:70px; "> 
                            <form class="searchbox">
                                 <input type="text" placeholder="Search.." name="search">
                                 <input type="submit"name="submit" class="searchbox" value="Search">
                            </form>
                        </div>   
                        <nav>
                                <ul>
                         <div class="permbajtja">
                    <li><a href="HOMEPAGE.php">HOMEPAGE</a></li>
                    <?php
                    if (isset($_COOKIE['logged']) && !isset($_SESSION["buy_session"]))
                      {
                    
                        echo '<li><a href="OnlineTraining.php">ONLINE TRAINING</a></li> ';
                      }
                    
                    ?>
                    <?php
                    if (isset($_SESSION["buy_session"]))
                      {
                    
                        echo '<li style="background-color:MediumSeaGreen;"><a href="paid.php">TRAININGS</a></li> ';
                      }
                    
                    ?>  
                    <li><a href="team.php">TEAM</a></li>
                    <?php
                      if (!isset($_COOKIE['logged']))
                      {
                    
                        echo '<li id="signUP" class="active"><a href="SIGN-UP.php" >SIGN UP | LOG IN</a></li>';
                      }
                      if (isset($_COOKIE['logged']))
                      {
                    
                        echo '<li class="active"><a href="membersdb.php">PROFILE</a></li>';
                      }
                    ?> 
                     <?php
                    if (isset($_COOKIE['logged']))
                      {
                    
                        echo '<li style="background-color:MediumSeaGreen;"><a href="logout.php">LOGOUT</a></li> ';
                      }
                    
                    ?>   



                    


                </div>
                                        
                                        
                                </ul>   
                        </nav>

        </header>
        <div class="mbeshtjellesi">

                <div class="permbajtja">
        <div class="membership-pricing-table">
            <div class="col">
                <div class="table">
                    <h2> Beginner </h2>
                    <div class="price"> $100
                        <span>Per year</span>
                    </div>
                        <ul>
                            <li><strong>1 </strong>Personal Trainer</li>
                            <li><strong>2 </strong>Gym Sessions a week</li>
                            <li><strong>2 </strong>hours a session</li>
                            <li><strong>5 </strong>Training methods</li>
                        </ul>
                        <a class="buynow" target="_blank">Buy Now</a>
                </div>
            </div>   
            <div class="col">

                <div class="table">
                    <h2> Intermediate </h2>
                    <div class="price"> $150
                        <span>Per year</span>
                    </div>
                        <ul>
                            <li><strong>1 </strong>Personal Trainer</li>
                            <li><strong>3 </strong>Gym Sessions a week</li>
                            <li><strong>2 </strong>hours a session</li>
                            <li><strong>7 </strong>Training methods</li>
                        </ul>
                        <a class="buynow"  target="_blank">Buy Now</a>
                </div>
            </div>   
            <div class="col">
                <div class="table">
                    <h2> Experienced </h2>
                    <div class="pop">Popular</div>
                    <div class="price"> $200
                        <span>Per year</span>
                    </div>
                        <ul>
                            <li><strong>1 </strong>Personal Trainer</li>
                            <li><strong>4 </strong>Gym Sessions a week</li>
                            <li><strong>3 </strong>hours a session</li>
                            <li><strong>10 </strong>Training methods</li>
                        </ul>
                        <a class="buynow"  target="_blank">Buy Now</a>
                </div>
            </div>   
            <div class="col">
                <div class="table">
                    <h2> Expert </h2>
                    <div class="price"> $500
                        <span>Per year</span>
                    </div>
                        <ul>
                            <li><strong>2 </strong>Personal Trainers</li>
                            <li><strong>7 </strong>Gym Sessions a week</li>
                            <li><strong>3 </strong>hours a session</li>
                            <li><strong>15 </strong>Training methods</li>
                        </ul>
                        <a class="buynow"  target="_blank">Buy Now</a>
                </div>
            </div>   
            
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.CCform').hide();
    });
    $(document).ready(function(){
        $('.buynow').click(function(){
             $('.CCform').show();
        });
    });

</script>

<!--  forma duhet te kete : emrin e pronarit te CC , numrin e CC , daten e skadimit, CVV-->

 <div class="CCform">
     <div class="header">
         <h1> Confirm Purchase </h1>

        </div>
        <div  class="pagesa">
            <form method="post" > 
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
                        <p><button id="buy-now" type="Submit" name="paid" style="padding-left: 40%; padding-right:40%" id="butoni" onclick="Count()" type="button">  
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
         if (!isset($_SESSION["buy_session"]))
                        {
                         
                            $_SESSION['buy_session'] = $_COOKIE['logged'] ;
                            
                            echo "

                            <script>
                              location.replace('http://localhost/ushtrime/bodyfitPHP/paid.php');
                            
                              </script>
                            ";

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
</br></br>
        <footer>
                <section id="footerimajtas">
                    <h4>Address</h4>
                    <p>"15280 S Keeler St". <br> Olathe, KS 66062</p>
        
                </section>
                <article id="footerimes">
                    <h4>Contact</h4>
                    <p>Number: +38349494949</p>
                    <p> Email:2018bodyfit@gmail.com</p>
        
                </article>
                <section id="footeridjathtas">
                    <h4>Social</h4>
                    <ul>
                            <li><a href="https://www.facebook.com" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com" target="blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com" target="blank"><i class="fab fa-twitter"></i></a></li>
                            
                    </ul>
                </section>
                 <section id="copyright">
                    Copyright©2018,BodyFit,Inc.Online and Face to Face training,Inc. <a href="privacypolicy.html"> Privacy Policy</a><a onclick="openWin()"href="game.php">Play a game</a>
                 </section> 
            </footer>
            

    </body>
</html>
