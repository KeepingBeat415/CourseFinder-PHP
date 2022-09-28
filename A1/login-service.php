<?php
//Initialize the session
session_start();

// Include config file
require_once "config.php";

// Showing ERROR
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define variables and initialize with empty values
$username = $password = $user_type = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "SELECT id, username, password, user_type FROM Users WHERE username = ?";

    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $username);

        // Set parameters
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Store result
            mysqli_stmt_store_result($stmt);
            // Check if username exists, if yes then verify password
            if (mysqli_stmt_num_rows($stmt) == 1) {
                // Bind result variables
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $user_type);

                if (mysqli_stmt_fetch($stmt)) {

                    if (password_verify($password, $hashed_password)) {
                        // Password is correct, so start a new session
                        session_start();

                        //Store data in session variables
                        $_SESSION["logged_in"] = true;
                        $_SESSION["id"] = $id;

                        // Redirect user to admin or student page
                        if ($user_type == "admin") {
                            header("location: admin.php");
                        } else {
                            header("location: student.php");
                        }
                    } else {
                        // Display an error message if password is not valid
                        $password_err = "The password you entered was not valid.";
                    }
                }
            } else {
                // Display an error message if username doesn't exist
                $username_err = "No account found with that username.";
            }
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }
}
// Close connection
mysqli_close($conn);
// }
?>