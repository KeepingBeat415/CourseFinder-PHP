<?php include 'admin_header.php' ?>

<body>
    <div class="container-fluid" style="margin-top: 75px">
        <h2>Create Course</h2>
        <form action="course-create" id="courseForm" name="courseForm" onsubmit="return validateForm()" method="POST">
            <div class="form-group">
                <label>Course Code</label>
                <input type="text" name="course_code" class="form-control">
                <small class="form-text text-muted">Should be in the form SOEN-387, COMP-353, etc.</small>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Semester</label>
                <input type="text" name="semester" class="form-control">
                <small class="form-text text-muted">Should be in the form Fall 2021, Winter 2022, etc.</small>
            </div>
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Mon" id="monday">
                    <label class="form-check-label" for="monday">Mon</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Mon" id="tuesday">
                    <label class="form-check-label" for="tuesday">Tue</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Mon" id="wednesday">
                    <label class="form-check-label" for="wednesday">Wed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Mon" id="thursday">
                    <label class="form-check-label" for="thursday">Thu</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Mon" id="friday">
                    <label class="form-check-label" for="friday">Fri</label>
                </div>
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="text" name="time" class="form-control">
                <small class="form-text text-muted">Should be in the form 8:45-10:00, 13:15-14:30, etc.</small>
            </div>
            <div class="form-group">
                <label>Room</label>
                <input type="text" name="room" class="form-control">
            </div>
            <div class="form-group">
                <label>Start Date</label>
                <input type="text" class="form-control" placeholder="Placeholder Input" disabled>
            </div>
            <div class="form-group">
                <label>End Date</label>
                <input type="text" class="form-control" placeholder="Placeholder Input" disabled>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Create Course</button>
        </form>
    </div>

    <script>
        function validateForm() {
            let form = document.forms["courseForm"];
            // VALIDATE HERE
        }   

        function submit() {
            document.getElementById("courseForm").submit();
        }
    </script>
</body>

</html>