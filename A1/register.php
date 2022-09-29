<?php include 'register-service.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="../theme.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">

  <script type="text/javascript" src="functions.js"></script>

</head>

<body>

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">

            <form action="register.php" method="post">
              <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
              <?php
              if (!empty($username_err)) {
                echo "
            <div class=\"form-row\">
              <div class=\"form-group col-md-12\">
                <div class=\"alert alert-danger\" role=\"alert\" style=\"text-align: center;\">$password_err $username_err</div>
              </div>
            </div>
              ";
              }
              ?>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" pattern="^\S+$" required title="Please enter valid information to proceed." />
                </div>
                <div class="form-group col-md-4">
                  <label>Password</label>
                  <input type="password" name="password" id="password" pattern="^\S+$" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                  <label>Confirm Password</label>
                  <input type="password" name="confirm_password" id="confirm_password" pattern="^\S+$" class="form-control" onkeyup="validate_password()"/>
                  <span id="wrong_pass_alert"></span>
                </div>
              </div>

              <div style="padding: 20px 0px 0px 0px;" class="form-row">
                <div class="form-group col-md-4">
                  <label>First Name</label>
                  <input name="first_name" type="text" class="form-control" pattern="[A-Za-z]{1,32}" required title="Please enter valid information to proceed." />
                </div>
                <div class="form-group col-md-4">
                  <label>Last Name</label>
                  <input name="last_name" type="text" class="form-control" pattern="[A-Za-z]{1,32}" required title="Please enter valid information to proceed." />
                </div>

                <div class="form-group col-md-4">
                  <label>Email</label>
                  <input 
                    name="email" 
                    type="email" 
                    class="form-control" 
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                    required 
                    title="Please enter valid information to proceed." />
                </div>

              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Mobile Phone</label>
                  <input name="phone_number" type="text" class="form-control" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required title="Please enter valid information to proceed (EXAMPLE: 000-000-0000)." />
                </div>

                <div class="form-group col-md-4">
                  <label>Account Type</label>
                  <select class="form-control" name="user_type" id="user_type">
                    <option value="admin">Administrator</option>
                    <option value="student">Student</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Date of Birth</label> <br />
                  <input type="date" name="DOB" id="DOB" required />
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Address</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    name="address" 
                    required 
                    title="Please enter valid information to proceed." />
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <button id="submit" type="submit" class="btn btn-primary">SUBMIT</button>
                  <button type="reset" class="btn btn-default">RESET</button>
                  <p style="padding: 15px 0px 0px 0px;">Already have an account? <a href="login.php">Login here</a>.</p>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
</body>

</html>