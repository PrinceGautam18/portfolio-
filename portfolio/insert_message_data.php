
<?php

include_once 'C:\php\xampp\htdocs\portfolio\database\database-connection.php';


if(isset($_POST['submit'])){

   

   $firstName=$_POST['firstName'];
   $lastName=$_POST['lastName'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $message=$_POST['message'];

   $insert="INSERT INTO contact_us(firstname,lastname,email,mobile,message) VALUES('$firstName','$lastName','$email','$mobile','$message')";
      
   if(mysqli_query($conn,$insert))
   {
      /* registration successful then go forword next page */
      
      $_session['message']="Register successful :";
       //jump to page when click button
      header('Location:portfolio.php');
      
     
 
 }
 else{
    $_session['not-match']="not match password:";
   echo 'noooo';
}
}
?>