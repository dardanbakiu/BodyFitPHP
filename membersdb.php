
<?php session_start(); ?>
<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="slideshow.css">
    
    <link rel="shortcut icon" href="icon.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
     integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
     crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="gameScript.js"></script>
     <title>Home</title>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body >
    <header>
        <hr id="vija">
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
        <div class="permbajtja">
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
                      if (isset($_SESSION['paid']))
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
                
               <!-- Ketu fillon faqja -->
          
            <?php 
              include 'lidhjadb.php';

               $username = $_COOKIE['logged'];

              $result = $conn->query('select * from register where username="'.$username.'" ');

               $row = mysqli_fetch_assoc($result);
              $name = $row['name'];
              $lastname = $row['lastname'];
              $email = $row['email'];
              $username = $row['username'];
              $city = $row['city'];
//qetu ki me ndreq me css mu dok mir
              ?><div id="all">
                <?php
              
              echo "<BR><BR><h1 style='text-align:center;' id='emriphp'> ".$name." ".$lastname."</h1>";
              echo "<h2 style='text-align:center;' id='emailphp'>".$email."</h2>";
              echo "<h3 style='text-align:center;' id='usernphp'> @".$username."</h3>";
              echo "<h4 style='text-align:center;' id='cityphp'>  ".$city."</h4  >";
             ?>
             </div>
             <?php

            ?>

<br><br>
           <p style="text-align: center;"> <button  id="change_data_btn" class="btn  btn-success">Ndrysho te dhenat</button> </p><br><br>

          <div class="ndrysho_te_dhenat" style="text-align: center; ">
            <label>Emri: </label>
            <p> <input id="name" type="text"/></p>
            <label>Mbiemri: </label>
            <p> <input id="lastname" type="text"/></p>
            <label>Qyteti: </label>
            <p><input id="city" type="text"/></p>
            <label>Email: </label>
            <p> <input id="email" type="text"/></p>
            <label>Fjalekalimi</label>
            <p> <input id="password" type="password"/></p>
            <p><input id="click" type="submit"/></p>
            <p id="response_text"></p>

            <div id="changed_data_div"></div>

            <p id="comments"></p>
          </div>
          <script type="text/javascript">
            $(document).ready(function(){
              $('.ndrysho_te_dhenat').hide()
            })

            $(document).ready(function(){
              $('#change_data_btn').click(function(){
                $('.ndrysho_te_dhenat').toggle();
                $('#all').hide();
                $('#change_data_btn').hide();
              });
            });


            
//ketu fillon ajaxi
            $("#click").click(function ()
        {
            $.ajax(
            {
                type: "GET",
                url: "editoajax.php",
                data: ({
                    emri: document.getElementById("name").value,
                    lastname: document.getElementById("lastname").value,
                    city: document.getElementById("city").value,
                    email: document.getElementById("email").value,
                    password: document.getElementById("password").value
                }),
                success: function(response)
                {
                //qetu ki me ndreq me jquery mi qit tdhanat e tekstit qe mirren prej ubdetimit    
                    if (response == "1")
                    {
                      $("#response_text").text("Te dhenat tuaja nuk jane edituar");
                    }
                    else
                    {
                        $("#response_text").text("Te dhenat tuaja jane edituar");
                    }
                }
            });
        });



          </script> 
               <!-- ketu perfundon ajaxi per editim  -->
                <!-- Ketu fillon ajaxi per shfaqje -->              

          <!-- <script type="text/javascript">
            $(document).ready(function() {

            $("#display").click(function() {                

              $.ajax({    //create an ajax request to display.php
                type: "GET",
                url: "display.php",             
                dataType: "html",   //expect html to be returned                
                success: function(response){                    
                    $("#responsecontainer").html(response);
                    $('#changed_name').text(response)
                }

            });
        });
        });
          </script> -->

          <script type="text/javascript">
            
            $(document).ready(function(){
              $('#change_data_btn').click(function(){
            setInterval(function(){ 
                $('#changed_data_div').load('selektimidb.php')
                }, 1000);

              })
            })
        

          </script>

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