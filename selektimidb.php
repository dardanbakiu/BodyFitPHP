<?php 
include 'lidhjadb.php';


    $username = $_COOKIE['logged'];

          $sql = 'select * from register where username="'.$username.'"';
          $result = mysqli_query($conn,$sql);
         
         
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