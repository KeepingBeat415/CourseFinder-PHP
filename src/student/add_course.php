<?php
include 'student_header.php';
$not_enroll = "select c.id, c.code, c.title , c.semester from Course c where c.id not in (select e.course_id from Enrolled_In e, Users u where u.id = {$user_id} and e.student_id = u.id) ORDER BY c.id;";

//$enroll = "select title from course;";
$result = $conn->query($not_enroll);
?>

<html>
<div class="container theme-showcase" role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="padding: 50px 50px 250px 50px;">
        <h3>Add Courses</h3>
        <div class="form-row">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Code</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Semester</th>
                    </tr>
                </thead>
            <?php
            if ($result->num_rows != 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"]; ?>
                    <tbody>
                            <tr>
                                <td class="text-center"><?php echo $row["code"] ?>
                                <td class="text-center"><?php echo $row["title"] ?>
                                <td class="text-center"><?php echo $row["semester"] ?>
                                <td class="text-center"><a href='add-script.php?id=<?php echo $id; ?>' class="btn btn-primary btn-sm">Add</a></td>
                            </tr>
                        </tbody>
                   
                    
            <?php echo "<br>";
                }
            }
            ?>
        </div>
    </div>
</div>

</html>