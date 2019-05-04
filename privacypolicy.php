<!DOCTYPE html>
<html >
<head>
  <link rel="stylesheet" type="text/css" href="dragndrop.css">
  <script src="dragndrop.js"></script>
    <link rel="stylesheet" href="style.css">
   
    <link rel="stylesheet" href="https://www.google.com">
    <link rel="shortcut icon" href="icon.png"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
     integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
     crossorigin="anonymous">  
     <script src="gameScript.js"></script>   
     <title>PrivacyPolicy</title>   

    <style> 
		@font-face {
  			font-family: myFirstFont;
  			src: url(sansation_light.woff);
		}

		#h2-fontface {
  			font-family: myFirstFont;
		}
	</style>

     <style>
             *{
                     font-family: Tahoma;
             }
       .permbajtja{
               font-family: Arial, Helvetica, sans-serif;
               font-size: 17px;
               text-align: justify;
       }
       @media(max-width: 768px){
        
          .mbeshtjellesi{
                  
                  padding: 360px 60px 35px 60px ;
                  word-wrap: center;
          }
        }
     </style>
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
                        
                            echo '<li class="active"><a href="membersdb.php" >BODYFIT MEMBERS</a></li>';
                          }
                        ?>                        
                        </div>
                        
                        
                </ul>   
        </nav>
    </header>
    <div class="mbeshtjellesi">
        <div class="permbajtja">
                <h2 id="h2-fontface">Privacy Policy</h2>
                <p>Your privacy is important to us. It is BodyFit's policy to respect your privacy regarding any information we may collect from you across our website, 
                        <!-- <a href="https://www.ibodyfit.com/">https://www.ibodyfit.com/</a>,  -->
                        and other sites we own and operate.</p>
                <p>We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting it and how it will be used.</p>
                <p>We only retain collected information for as long as necessary to provide you with your requested service. What data we store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorised access, disclosure, copying, use or modification.</p>
                <p>We don’t share any personally identifying information publicly or with third-parties, except when required to by law.</p>
                <p>Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and practices of these sites, and cannot accept responsibility or liability for their respective privacy policies.</p>
                <p>You are free to refuse our request for your personal information, with the understanding that we may be unable to provide you with some of your desired services.</p>
                <p>Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.</p>
                <p>This policy is effective as of 14 November 2018.</p>
                
                
                <h2>BodyFit Terms of Service</h2>
                <h3>1. Terms</h3>
                <p>By accessing the website at 
                    <!-- <a href="https://www.ibodyfit.com/">https://www.ibodyfit.com/</a>, -->
                     you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
                <h3>2. Use License</h3>
                <ol type="a">
                   <li>Permission is granted to temporarily download one copy of the materials (information or software) on BodyFit's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                   <ol type="i">
                       <li>modify or copy the materials;</li>
                       <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                       <li>attempt to decompile or reverse engineer any software contained on BodyFit's website;</li>
                       <li>remove any copyright or other proprietary notations from the materials; or</li>
                       <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                   </ol>
                    </li>
                   <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by BodyFit at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
                </ol>
                <h3>3. Disclaimer</h3>
                <ol type="a">
                   <li>The materials on BodyFit's website are provided on an 'as is' basis. BodyFit makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
                   <li>Further, BodyFit does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
                </ol>
                <h3>4. Limitations</h3>
                <p>In no event shall BodyFit or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on BodyFit's website, even if BodyFit or a BodyFit authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
                <h3>5. Accuracy of materials</h3>
                <p>The materials appearing on BodyFit's website could include technical, typographical, or photographic errors. BodyFit does not warrant that any of the materials on its website are accurate, complete or current. BodyFit may make changes to the materials contained on its website at any time without notice. However BodyFit does not make any commitment to update the materials.</p>
                <h3>6. Links</h3>
                <p>BodyFit has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by BodyFit of the site. Use of any such linked website is at the user's own risk.</p>
        
    </div>



    <div style="display:flex; justify-content: center;">
    <div id="box">
      <!-- Qetu kena me i qit fotot qe kena mi ba drag and drop -->

      <div id="ddrag1" class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
      <img src="upright.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="100%" height="100%">
    </div>

    <div id="ddrag2" class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
      <img src="upleft.jpg" draggable="true" ondragstart="drag(event)" id="drag2" width="100%" height="100%">
    </div>

    <div id="ddrag3" class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
      <img src="downright.jpg" draggable="true" ondragstart="drag(event)" id="drag3" width="100%" height="100%">
    </div>

    <div id="ddrag4" class="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
      <img src="downleft.jpg" draggable="true" ondragstart="drag(event)" id="drag4" width="100%" height="100%">
    </div>

  
      <div class="drop1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

      <div class="drop2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

      <div class="drop3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

      <div class="drop4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

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