<?php include 'register-service.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" , initial-scale=1, shrink-to-fit=no">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
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
        <input type="text" class="form-control" name="address" id="address">
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