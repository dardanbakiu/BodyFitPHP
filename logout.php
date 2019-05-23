<?php
$cookie= $_COOKIE['logged']; 

include 'lidhjadb.php';
// $usernameLogin = $_POST['usernameLogin'];
// $selectUsername = $conn->query("select username from register where username ='".$usernameLogin."';");
session_start();
session_destroy();
unset($_SESSION['buy_session']);
session_destroy();
setcookie("logged", $cookie, time() - 1, "");
echo
                            "

                            <script>
                              location.replace('http://localhost/ushtrime/bodyfitPHP/HOMEPAGE.php');
                            
                              </script>
                            ";
?>