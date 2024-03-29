<?php
include "../config.php";
if (isset($_GET['id'])) {
    $c_id = $_GET['id'];
    $sql = "select c.end_date from Course c, Enrolled_In e where e.id = {$c_id} and e.course_id = c.id;";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $start_date = $row['end_date'];
    $date = DateTime::createFromFormat("Y-m-d", $start_date);
    $diff = date_diff($date, new DateTime('now'));
    if ($date < new DateTime('now') && $diff->format("%a")) {
        echo '<script>alert("Deadline passed")</script>';
        echo '<script>window.location.href="student_home.php";</script>';
    } else {
        $query = "DELETE FROM Enrolled_In WHERE id = {$c_id}; ";
        if ($result = $conn->query($query)) {
            echo '<script>alert("Record deleted successfully !")</script>';
            echo '<script>window.location.href="student_home.php";</script>';
        } else {
            echo '<script>alert("Record not deleted !")</script>';
            echo '<script>window.location.href="student_home.php";</script>';
        }
    }
}
