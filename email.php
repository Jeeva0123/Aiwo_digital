<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

    $to="smtpcheck.jeeva@gmail.com";
   $header="From:$name<$email>";
  $mssg="
  Client Name : $name
  Client Contact Number : $mob_no
  Client \mail ID : $email
  Client Message : $message";
// echo $mssg;
 $subject="$name";
  if(isset($_POST['submit']))
  {
    //   echo "true";
  if(mail($to,$subject,$mssg,$header))
  {
    //   echo "success";
    echo "sucess";
     header("Location:index.html");
  }
  else {
      echo "Failed. Try again later";
     
  }
  }
  else{
      //header("Location:index.html");
       echo("failed");
  }
 ?>

