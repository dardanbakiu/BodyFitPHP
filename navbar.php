<?php
        function __construct(argument)
        {
            echo 
        "
                <ul>
                        <div class='permbajtja'>    
                        <li ><a href='HOMEPAGE.php'>HOMEPAGE</a></li>
                        <li><a href='aboutus.php'>ABOUT US</a></li> 
                        <li><a href='OnlineTraining.php'>ONLINE TRAINING</a></li> 
                        <li><a href='team.php'>TEAM</a></li>
        ";
                          if (!isset($_COOKIE['logged']))
                          {
                            echo '<li id="signUP" class="active"><a href="SIGN-UP.php" >SIGN UP | LOG IN</a></li>';
                          }
        echo "</div>
           </ul>   
        ";
        }
        
?>