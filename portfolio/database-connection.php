<?php
session_start();

$conn=mysqli_connect('localhost','root','','portfolio');

if(!$conn){
    die("connecton error".mysqli_connect_error());
}
else{
    echo "yes";
   
}

?>