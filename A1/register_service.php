<?php 
    include('config.php'); 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $username = $password = $first_name = $last_name = $address = "";
    $email = $phone_number = $DOB = $user_type = "";

    extract( $_POST );
    // Processing form data when form is submitted
    if (isset($_POST['reg_user'])) {
    //if($_SERVER["REQUEST_METHOD"] == "POST"){
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


        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Redirect to login page
            header("location: login.php");
        } else{
            echo "Something went wrong. Please try again later." . mysqli_stmt_error($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
    else{
        echo "Something went wrong.";
    }
    }
?>