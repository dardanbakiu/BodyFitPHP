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
</head>
<body >
    <header>
        <hr id="vija">
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
                    <li ><a href="HOMEPAGE.php">HOMEPAGE</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="OnlineTraining.php">ONLINE TRAINING</a></li> 
                    <li><a href="team.php">TEAM</a></li>
                    <?php
                      if (!isset($_COOKIE['logged']))
                      {
                    
                        echo '<li id="signUP" class="active"><a href="SIGN-UP.php" >SIGN UP | LOG IN</a></li>';
                      }
                      if (isset($_COOKIE['logged']))
                      {
                    
                        echo '<li class="active"><a href="membersdb.php" >PROFILE</a></li>';
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
              echo "<p id='emriphp'> ".$name."</p>";
              echo $lastname.'<br>';
              echo $email.'<br>';
              echo $username.'<br>';
              echo $city.'<br>';


            ?>


            <button id="change_data_btn">Change Your Informations</button>

          <div class="ndrysho_te_dhenat" style="text-align: center; ">
            <p>Name: <input id="name" type="text"/></p>
            <p>Lastname: <input id="lastname" type="text"/></p>
            <p>City: <input id="city" type="text"/></p>
            <p>Email: <input id="email" type="text"/></p>
            <p>Password: <input id="password" type="password"/></p>
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
              })
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