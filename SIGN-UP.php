
<!DOCTYPE html>
<html>
<head>
     <title>SignUp|LogIn</title>



    <link rel="stylesheet" href="style.css">   
      <link rel="shortcut icon" href="icon.png"/>
    <link rel="stylesheet" href="signupstyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
     integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
     crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="gameScript.js"></script>  
    
</head>
<body>
<!-- e re -->

    <header>
        <hr id="vija">
        <div class="permbajtja">
          <img src="logo1.png" alt="Logoja" style="width:200px;height:70px; "> 

          <!-- Search BOX -->
            <form class="searchbox" >
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
                        ?>                        
                        </div>
                        
                        
                </ul>   
        </nav>
    </header>
    <img id="myImg" src="32.jpg" alt="">
    <script>
   var myElement=document.getElementById('myImg'),
     myImgs=['32.jpg','34.jpg','786607copy.jpg','bg1.jpg','B2.jpg'];
     
    //  console.log(myImgs.length);
    //  console.log(Math.floor(Math.random()*myImgs.length));
    // console.log(myRandomNum);
    // console.log(myImgs[myRandomNum]);
  
    function changeImage(myElement,myImgs){
       'use strict';
       setInterval(function(){
      var  myRandomNum=Math.floor(Math.random()*myImgs.length);
        console.log(myRandomNum);
         myElement.src= myImgs[myRandomNum];
       },3000);
     }
     changeImage(myElement,myImgs);       
   </script>

<div class="mbeshtjellesi">     
       
   <div class="permbajtja">
        <div class="container">                                 
                <div class="signup">Sign Up</div>
                <div class="login">Log In</div> 
              

              <!--  -->
                <form method="post" onsubmit="return validimi1()">                            
                <div class="signup-block">                                        
                   <input type="text" value="" placeholder="Choose a Username" id="username" name="usernameRegister" required />
                   <input type="email" value="" placeholder="E-mail" id="email" name="emailRegister" required />
                   <input type="password" value="" placeholder="Password" id="password" name="passwordRegister" required />
                   <input type="submit" value="Submit" class="submit" name="submitRegister" onclick="show()">    
                   <h2 id="register_alert" style="display: none;"></h2>                                           
                </div>
           </form>

           <?php
// lidhja me db
include 'lidhjadb.php';

if(mysqli_connect_error()) {
  echo "error";
}

else {


// i kena rujt nvariabla inputat

if (isset($_POST['usernameRegister']) && isset($_POST['emailRegister']) && isset($_POST['passwordRegister']))
{

$usernameRegister = ($_POST['usernameRegister']);
$emailRegister = $_POST['emailRegister'];
$passwordRegister = $_POST['passwordRegister'];


  if (!empty($usernameRegister) || !empty($emailRegister) || !empty($emailRegister) || !empty($passwordRegister)) 
    {  //Prepare statement
         $stmt = $conn->prepare("insert into register values('".$usernameRegister."', '".$emailRegister."', '".$passwordRegister."');");
         $stmt->execute();
         $rnum = $stmt->num_rows;

         echo 
         "<script>
            document.getElementById('register_alert').innerHTML = 'Jeni regjistruar me sukses!';
            document.getElementById('register_alert').style.display = 'block';
         </script>"; 
        
    }

  else  
    {
      echo "Te gjitha kolonat duhet te plotesohen";
    }
}
}
?>
           
           <!--  -->
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validimi2()">
                <div class="login-block">                                       
                   <input type="text" value="" placeholder="Username" id="usernamee" name="usernameLogin" />
                   <input type="text" value="" placeholder="Password" id="passwordd" name="passwordLogin" />
                   <input type="submit" value="Log In" class="loginn" name="submitLogint">                             
                   <span><a href="#">I forgot my username or password.</a></span>
                </div>  
            </form> 
             <?php 
              include 'lidhjadb.php';

                if (isset($_POST['usernameLogin']) && isset($_POST['passwordLogin']) )
                {
                  $usernameLogin = $_POST['usernameLogin'];
                  $passwordLogin = $_POST['passwordLogin'];

                if  (!empty($usernameLogin) || !empty($passwordLogin)) 
                  {
                      
                  // i kena rujt nvariabla inputat
                    

                    $selectUsername = $conn->query("select username from register where username ='".$usernameLogin."';");
                    $selectPassword = $conn->query("select password from register where password ='".$passwordLogin."';");


                  if  (( $selectUsername->num_rows > 0) &&( $selectPassword->num_rows > 0)) 
                      {
                        if (!isset($_COOKIE["logged"]))
                        {
                          setcookie("logged", $usernameLogin, time() + (86400 * 30));
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
                    
                }}
                ?>      
                  
        </div>
  </div>       
   <script>
         $(".login-block").hide();
         $(".login").css("background", "rgba(199, 198, 198, 0.87)");

         $(".login").click(function(){
         $(".signup-block").hide();
         $(".login-block").show();
         $(".signup").css("background", "rgba(199, 198, 198, 0.87)");
         $(".login").css("background", "#fff");
         });

         $(".signup").click(function(){
         $(".signup-block").show();
         $(".login-block").hide();
         $(".login").css("background", "rgba(199, 198, 198, 0.87)");
         $(".signup").css("background", "#fff");
         });

         $("button").click(function(){
         $(".signup-block input").val("");
         $(".login-block input").val("");
         
         });
    
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