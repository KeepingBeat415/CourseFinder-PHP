<?php
include('./config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $code = $title = $semester = $days = $time = $instructor = $room = "";
  $start_date = $end_date = "";

  // Check POST request data
  if (!empty(($_POST))) {
    
    $sql = "INSERT INTO Course (code, title, semester, days, time, instructor, room, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      mysqli_stmt_bind_param($stmt, "sssssssss", $code, $title, $semester, $days, $time, $instructor, $room, $start_date, $end_date);
      // Set parameters
      $code = $_POST[""];
      $title = $_POST[""];
      $semester = $_POST[""];
      $days = $_POST[""];
      $time = $_POST[""];
      $instructor = $_POST[""];
      $room = $_POST[""];
      $start_date = $_POST[""];
      $end_date = $_POST[""];

      if (mysqli_stmt_execute($stmt)) {
        // Something
      } else {
        echo "Something went wrong.", mysqli_stmt_error($stmt);
      }
      
      mysqli_stmt_close($stmt);
    }
  } else {
    echo "Could not receive any data. Please try again.";
  }
} else {
  echo "Something went wrong.";
}
