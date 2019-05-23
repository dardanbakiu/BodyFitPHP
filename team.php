<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="team.css">
       <link rel="shortcut icon" href="icon.png"/>
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
     integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
     crossorigin="anonymous">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="gameScript.js"></script>
     <title>Team</title>   
     <style type="text/css">
        #all {
            display: grid;
            grid-template-columns: 34% 33% 33%;
        }

        #kontakt {
            grid-column-start: 2;
        }

     </style>
</head>
<body >
    <header style="z-index: 99;">
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
        <section id="#top-photo">
            <img src="top-photo.jpg">
        </section>

       <div style="overflow-x:auto;">
        <section id="tabela1">
            <table >
                <thead>
                    <tr id="first-row">
                        <th colspan="4" title="Our team contains 9 of the most incredible trainers!">
                                <strong>OUR TEAM</strong>
                        </th>
                    </tr>
                    <tr id="second-row">
                        <th>Nr.</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Occupation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bob</td>
                        <td>Harper</td>
                        <td>Fitness Instructor</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Anna</td>
                        <td>Smith</td>
                        <td>Yoga teacher</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Tony</td>
                        <td>Horton</td>
                        <td>Fitness Instructor</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Jessica</td>
                        <td>Alba</td>
                        <td>Meditation Instructor</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Gunnar</td>
                        <td>Peterson</td>
                        <td>Body Builder, Weightlifing</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Nina</td>
                        <td>Packer</td>
                        <td>Fitness Instructor</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Rachel</td>
                        <td>Geller</td>
                        <td>Athletic</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>John</td>
                        <td>Baker</td>
                        <td>Fitness Instructor</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Karl</td>
                        <td>Greene</td>
                        <td>Fitness Instructor, Runner</td>
                    </tr>
                </tbody>
            </table>
        </section>
        </div> 

        <section id="trainers1">
            <ul class="team-list">
                <li class="trainers" >
                    <div class="card">
                        <div class="para">
                            <img  id="trainer1" src="trainer1.jpg" alt="trainer1">
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                <address>
                                    Name:<br>
                                       <h2>BOB HARPER</h2>
                                    Occupation:<br>
                                       <b><p>STAFF / Fitness Instructor</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044646049" class="telephone">044646049</a>
                                    <br><br>
                                    <a href="mailto:bharper@gmail.com" class="message" target="_blank">Send a message</a>
                                </address>
                            </div>
                        </div>
                    </div>    
                </li>
                <li class="trainers" >
                     <div class="card">
                        <div class="para">
                            <img  id="trainer2" src="ftrainer1.jpg" alt="ftrainer1" >
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                <address>
                                    Name:<br>
                                       <h2>ANNA SMITH</h2>
                                    Occupation:<br>
                                       <b><p>Yoga teacher</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044999888" class="telephone">044999888</a>
                                    <br><br>
                                    <a href="mailto:asmith@gmail.com" class="message" target="_blank">Send a message</a>
                                </address>
                            </div>
                        </div>
                </li>
                <li class="trainers">
                     <div class="card">
                        <div class="para">
                            <img   id="trainer3" src="trainer2.jpg" alt="trainer2" >
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                              <address>
                                    Name:<br>
                                       <h2>TONY HORTON</h2>
                                    Occupation:<br>
                                       <b><p>Fitness Instructor</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044898989" class="telephone">044898989</a>
                                    <br><br>
                                    <a href="mailto:thorton@gmail.com" class="message" target="_blank">Send a message</a>
                                </address>
                            </div>
                        </div>
                </li>
                <li class="trainers" id="trainer4">
                     <div class="card">
                        <div class="para">
                            <img src="ftrainer2.jpg" alt="ftrainer2" >
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                <address>
                                    Name:<br>
                                       <h2>JESSICA ALBA</h2>
                                    Occupation:<br>
                                       <b><p>Meditation Instructor</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044454545" class="telephone">044454545</a>
                                    <br><br>
                                    <a href="mailto:jalba@gmail.com" class="message" target="_blank">Send a message</a>
                                </address> 
                            </div>
                        </div>
                </li>
                <li class="trainers" id="trainer5">
                     <div class="card">
                        <div class="para">
                            <img src="trainer3.jpg" alt="trainer3">
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                <address>
                                    Name:<br>
                                       <h2>JON DOE</h2>
                                    Occupation:<br>
                                       <b><p>Body Builder, Weightlifing</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044444444" class="telephone">044444444</a>
                                    <br><br>
                                    <a href="mailto:jdoe@gmail.com" class="message" target="_blank">Send a message</a>
                                </address> 
                            </div>
                        </div>
                </li>
                <li class="trainers" id="trainer6">
                     <div class="card">
                        <div class="para">
                            <img src="ftrainer3.jpg" alt="ftrainer3" >
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                 <address>
                                    Name:<br>
                                       <h2>NINA PACKER</h2>
                                    Occupation:<br>
                                       <b><p>Fitness Instructor</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044775577" class="telephone">044775577</a>
                                    <br><br>
                                    <a href="mailto:npacker@gmail.com" class="message" target="_blank">Send a message</a>
                                </address> 
                            </div>
                        </div>
                </li>
                <li class="trainers" id="trainer7">
                     <div class="card">
                        <div class="para">
                            <img src="trainer4.jpg" alt="trainer4" >
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                <address>
                                    Name:<br>
                                       <h2>RACHEL GELLER</h2>
                                    Occupation:<br>
                                       <b><p>Athletic</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044333222" class="telephone">044333222</a>
                                    <br><br>
                                    <a href="mailto:rgeller@gmail.com" class="message" target="_blank">Send a message</a>
                                </address> 
                            </div>
                        </div>
                </li>
                <li class="trainers" id="trainer8">
                     <div class="card">
                        <div class="para">
                            <img src="ftrainer4.jpg" alt="ftrainer4" >
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                <address>
                                    Name:<br>
                                       <h2>JOHN BAKER</h2>
                                    Occupation:<br>
                                       <b><p>Fitness Instructor</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044444123" class="telephone">044444123</a>
                                    <br><br>
                                    <a href="mailto:jbaker@gmail.com" class="message" target="_blank">Send a message</a>
                                </address>
                            </div>
                        </div>
                </li>
                <li class="trainers" id="trainer9">
                     <div class="card">
                        <div class="para">
                            <img src="trainer5.jpg" alt="trainer5" >
                        </div>
                        <div class="mbrapa">
                            <div class="information">
                                 <address>
                                    Name:<br>
                                       <h2>KARL GREENE</h2>
                                    Occupation:<br>
                                       <b><p>Fitness Instructor, Runner</p></b>
                                    Contact:<br><br>
                                    <a href="tel:044525252" class="telephone">044525252</a>
                                    <br><br>
                                    <a href="mailto:kgreene@gmail.com" class="message" target="_blank">Send a message</a>
                                </address>
                            </div>
                        </div>
                </li>
            </ul>
        </section>
     <div id="join" style="text-align: center;">
        <h3>Do you want to join our team?!</h3>
        <label> Full Name :</label> <input type="text" id="emrii" style="margin: 1%"><br>
        <label> Email :</label><input type="Email" id="email" style="margin:1%;"> <br>
        <textarea style="width: 15%;" id="pershk" rows="3" placeholder="Tregoni per veten tuaj" type="text"></textarea></br>
        <button id="click" style="width: 5%; height: 5vh; box-shadow: none; outline: none;">Submit</button>
        <div id="response_text"></div>
        <p id="regex"></p>
    </div>

    <script>
        $("#click").click(function ()
        {
            $.ajax(
            {
                type: "GET",
                url: "paragrafi.php",
                data: ({
                    emri: document.getElementById("emrii").value,
                    email: document.getElementById("email").value,
                    pershkrimi: document.getElementById("pershk").value
                }),
                success: function(response)
                {
                    
                    //if (response == "0")
                  //  {
                        $("#response_text").text("Keni shtuar me sukses!");
                    // }
                    // else
                    // {
                    //     $("#response_text").text("Keni shtuar pa sukses");
                    // }
                }
            });
        });
    </script>

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