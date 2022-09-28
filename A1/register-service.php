<?php 
    include('config.php'); 

    // Showing ERROR
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
   

    $username = $password = $first_name = $last_name = $address = "";
    $email = $phone_number = $DOB = $user_type = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

      $sql = "INSERT INTO Users (username, password, first_name, last_name, address, email, phone_number, DOB, user_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
              
      if($stmt = mysqli_prepare($conn, $sql)){
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "sssssssss", $username, $password, $first_name, $last_name, $email, $address, $phone_number, $DOB, $user_type);
          // Set parameters
          $username = $_POST["username"];
          $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Creates a password hash
          $first_name = $_POST["first_name"];
          $last_name = $_POST["last_name"];
          $address = $_POST["address"];
          $email = $_POST["email"];
          $phone_number = $_POST["phone_number"];
          $DOB = date('y-m-d', strtotime($_POST["DOB"]));
          $user_type = $_POST["user_type"];

          if(mysqli_stmt_execute($stmt)){
              header("location: login.php");
          } else{
              echo "Something went wrong." . mysqli_stmt_error($stmt);
          }
          mysqli_stmt_close($stmt);
      }
      else{
          echo "Something went wrong.";
      }
  }
?>