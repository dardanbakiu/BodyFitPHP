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
              echo "<h3 id='emriphp'>Emri: ".$name."</h3>";
              echo "<h3 id='emriphp'>Mbiemri: ".$lastname."</h3>";
              echo "<h3 id='emriphp'>Qyteti: ".$city."</h3>";
              echo "<h3 id='emriphp'>Email: ".$email."</h3>";
              echo "<h3 id='emriphp'>User: ".$username."</h3>";



              

?>