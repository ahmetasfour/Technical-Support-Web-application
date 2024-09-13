<?php

   $connection = mysqli_connect('localhost','root','','obs_db');
   @include 'config.php';


   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $danismak = $_POST['danismak'];
      $sure = $_POST['sure'];
      $tarih = $_POST['tarih'];
      $saat = $_POST['saat'];

       $request = "INSERT INTO book_form(name, email, phone, address, danismak, sure, tarih, saat) VALUES('$name','$email','$phone','$address','$danismak','$sure', '$tarih', '$saat')";
      mysqli_query($connection, $request);

      header('location:taleb.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>