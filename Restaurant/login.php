<?php
   $con = mysqli_connect("localhost","root","","eat_tone");


      $uname=$_POST['username'];
      $pword=$_POST['Password'];
     
      $result=mysqli_query($con,"SELECT * FROM login WHERE username= '$uname' and pass= '$pword'");
      $test=mysqli_fetch_array($result);
      $rows=mysqli_num_rows( $result);
      if($rows>0){
      
         echo 'You have logged in successfully';
         header('location:cart.html');
         
      } 
      else{
        echo 'You have entered invalid username or password';
         exit();
        }
        ?> 