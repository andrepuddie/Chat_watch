<?php
   $hostname = "127.0.0.1";
  $username = "root";
  $password = "240369AnD@";
  $dbname = "ap";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
