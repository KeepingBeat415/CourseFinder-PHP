<?php 
    // Create Connection
    $conn = mysqli_connect("localhost", "root", "", "SOEN387");

    // Check connection
    if (!$conn) {
      die("Connection failed" . mysqli_connect_error());
  } 
?>