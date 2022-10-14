<?php
include "../config.php";
include 'student_header.php';
if (isset($_GET['id'])) {
    $c_id = $_GET['id'];
    $sql = "select c.start_date from Course c where c.id = {$c_id};";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $start_date = $row['start_date'];
    $date = DateTime::createFromFormat("Y-m-d", $start_date);
    $diff = date_diff($date, new DateTime('now'));
    // echo $diff->format("%a");
    if ($date > new DateTime('now') || $diff->format("%a") <= 7) {
        $query = "INSERT INTO Enrolled_In (course_id, student_id) VALUES ({$c_id}, {$user_id});";
        // $result = $conn->query($query) or die("Error in query" . $conn->error);
        if ($result = $conn->query($query)) {
            echo '<script>alert("Record added successfully !")</script>';
            echo '<script>window.location.href="student_home.php";</script>';
        } else {
            echo '<script>alert("Record not added!")</script>';
            echo '<script>window.location.href="student_home.php";</script>';
        }
    } else {
        echo '<script>alert("Deadline passed")</script>';
        echo '<script>window.location.href="student_home.php";</script>';
    }
}
