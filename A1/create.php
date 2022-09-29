<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Scripts for Bootstrap-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <title>Create Course</title>
</head>

<body>
  <div class="container-fluid" style="margin-top: 75px">
    <h2>Create Course</h2>
    <form action="course-service.php" name="courseForm" onsubmit="return validateForm()"
      method="POST">
      <div class="form-group">
        <label>Course Code</label>
        <input type="text" name="code" class="form-control" required>
        <small class="form-text text-muted">Should be in the form SOEN-387, MANA-2257, etc.</small>
      </div>
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Semester</label>
        <input type="text" name="semester" class="form-control" required>
        <small class="form-text text-muted">Should be in the form Fall 2021, Winter 2022, etc.</small>
      </div>
      <div class="form-group">
        <label>Days</label>
        <input type="text" name="days" class="form-control" required>
        <small class="form-text text-muted" id="days-check">Should be in the form MonWedFri, MonFri, TueThu, Thu, etc.</small>
      </div>
      <div class="form-group">
        <label>Time</label>
        <input type="text" name="time" class="form-control" required>
        <small class="form-text text-muted">Should be in the form 8:45-10:00, 13:15-14:30, etc.</small>
      </div>
      <div class="form-group">
        <label>Instructor</label>
        <input type="text" name="instructor" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Room</label>
        <input type="text" name="room" class="form-control" required>
      </div>
      <br/>
      <button type="submit" class="btn btn-primary mb-2">Create Course</button>
    </form>
  </div>

  <script>
    function validateForm() {
      let form = document.forms["courseForm"];
      const codeRegex = /^([A-Z]{3,4})-(\d{3,4})$/;
      const semesterRegex = /^((Fall)|(Winter))\s20[2-9][0-9]$/;
      const daysRegex = /^((Mon)|(Tue)|(Wed)|(Thu)|(Fri)){1,5}$/;
      const timeRegex = /^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]-([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
      // VALIDATE HERE  
      if (!codeRegex.test(form["code"].value)) {
        alert("Please check course code value again.");
        return false;
      }
      if (!semesterRegex.test(form["semester"].value)) {
        alert("Please check semester value again.");
        return false;
      }
      if (!daysRegex.test(form["days"].value)) {
        alert("Please select at least 1 day of the week");
        return false;
      }
      if (!timeRegex.test(form["time"].value)) {
        alert("Please check time value again.");
        return false;
      }
      // SUBMIT
      submit();
    }

    function submit() {
      document.forms["courseForm"].submit();
    }
  </script>
</body>

</html>