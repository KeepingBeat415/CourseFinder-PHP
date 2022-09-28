<?php include 'create-service.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts for Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>Create Course</title>
</head>

<body>
    <div class="container-fluid" style="margin-top: 75px">
        <h2>Create Course</h2>
        <form action="course-create" method="POST">
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
        </form>
    </div>
</body>

</html>