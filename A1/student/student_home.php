<?php
include 'student_header.php';
$enroll = "select e.id, c.code, c.title , c.semester from Course c, Enrolled_In e, Users u where u.id = {$user_id} and u.id = e.student_id and e.course_id = c.id ORDER BY c.id;";
//$enroll = "select title from course;";
$result = $conn->query($enroll);
?>

<html>
<div class="container theme-showcase" role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="padding: 50px 50px 250px 50px;">
        <h3>Student Home Page</h3>
        <div class="form-row">
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    //echo $row["title"];
                    $id = $row["id"];
                    echo "Code: " . $row["code"] . " - Title: " . $row["title"] . " - Semester: " . $row["semester"]; ?>
                    <a href='delete-script.php?id=<?php echo $id; ?>' class="btn btn-danger btn-sm">Delete</a>
            <?php echo "<br>";
                }
            }
            ?>
            <div class="form-group col-md-4">
                <?php
                if ($result->num_rows < 5) { ?>
                    <form action="add_course.php">
                        <button class="btn btn-primary" type="submit" name="add_course" id="add_course">Add Course</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

</html>