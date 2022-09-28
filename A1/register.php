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


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" , initial-scale=1, shrink-to-fit=no">
  <!-- Scripts for Bootstrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
  <div class="container-fluid" style="margin-top: 75px">

    <h2>Sign Up</h2>

    <form action="register.php" method="post">

      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" />
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
      </div>

      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" class="form-control" />
      </div>

      <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" />
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" />
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" />
      </div>

      <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone_number" id="phone_number" />
      </div>

      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" id="address">
      </div>

      <div class="form-group">
        <label>Date of Birth</label>
        <input type="date" name="DOB" id="DOB">
      </div>

      <div class="form-group">
        <label>Account Type</label>
        <select class="form-control" name="user_type" id="user_type">
          <option value="admin">Administrator</option>
          <option value="student">Student</option>
        </select>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit" />
        <input type="reset" class="btn btn-default" value="Reset" />
      </div>

      <p>Already have an account? <a href="login.php">Login here</a>.</p>
      
    </form>
  </div>
</body>

</html>