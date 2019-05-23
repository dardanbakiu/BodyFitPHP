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
     
<br><br>
<h1 style="text-align: center;">Paid Account - Courses</h1>
<br><br>
<div class="container">
<h3>Day 1</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/YdB1HMCldJY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><br>

<h3>Day 2</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/o6JqgPfC-P8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><br>

<h3>Day 3</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/8MPb0O9xApA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><br>

<h3>Day 4</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/0RAY3S_iJsM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><br>

</br>


</div>



</div>
</div>


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
                    Copyright©2018,BodyFit,Inc.Online and Face to Face training,Inc. <a href="privacypolicy.html"> Privacy Policy</a><a onclick="openWin()"href="#">Play a game</a>
                 </section> 
            </footer>
            

    </body>
</html>
