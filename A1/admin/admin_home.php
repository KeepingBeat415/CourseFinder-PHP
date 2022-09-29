<?php include 'admin_header.php' ?>

<div class="container theme-showcase" role="main">
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div>
      <form action="admin_home.php" method="post">
        <h2>Course enrolled students:</h2>
        <div class="form-row">
            <div class="form-group col-md-8">
            <input type="search" class="form-control" name="course_code"placeholder="Search...">
            </div>
            <div class="form-group col-md-4">
            <button class="btn btn-primary" type="submit" name="search_course">Submit</button>
            </div>
        </div>
      </div>

      </form>
      <?php include 'search-service.php' ?>
    </div>

  </div>
</div>

</div>

<?php include 'admin_footer.php' ?>