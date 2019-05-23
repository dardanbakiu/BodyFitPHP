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
                    <li><a href="HOMEPAGE.php">HOMEPAGE</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <?php
                    if (isset($_COOKIE['logged']))
                      {
                    
                        echo '<li><a href="OnlineTraining.php">ONLINE TRAINING</a></li> ';
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
                      if (isset($_COOKIE['logged']))
                      {
                    
                        echo '<li" style="float:right;"><button id="logout"> logout </button></li>';
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
    	<!-- ktu e programon faqen me video -->

    	<!-- ktu perfundon programimi i faqes -->

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