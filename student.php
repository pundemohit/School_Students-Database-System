<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Operations</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-5">
    <?php include('message.php');?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Add
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">
            <form action="code.php" method="post">
                <div class="mb-3">
                    <label for="">Student Name</label>
                    <input type="text" name="name" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="">Student Email</label>
                    <input type="text" name="email" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="">Student Phone</label>
                    <input type="text" name="phone" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="">Student Course</label>
                    <input type="text" name="course" class="form-control" id="">
                </div>
                <div class="mb-3">
                  <button type="submit" name="save_student" class="btn btn-primary" >Save Student</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>