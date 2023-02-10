<?php
  session_start();
    require 'dbcon.php'
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

  <div class="container mt-4">

    <?php include('message.php');?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student Details
              <a href="student.php" class="btn btn-primary float-end">Add Students</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Course</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                   $query = "SELECT * FROM students";
                   $query_run = mysqli_query($con, $query);
                   
                   if(mysqli_num_rows($query_run) > 0)
                   {
                      foreach($query_run as $student){
                       
                       ?>
                          <tr>
                              <td><?= $student['id']; ?></td>
                              <td><?= $student['name']; ?></td>
                              <td><?= $student['email']; ?></td>
                              <td><?= $student['phone']; ?></td>
                              <td><?= $student['course']; ?></td>
                              <td>
                                <a href="student-view.php?id=<?= $student['id']; ?>" class="my-1 btn btn-sm btn-info">View</a>
                                <a href="student-edit.php?id=<?= $student['id']; ?>" class=" my-1 btn btn-sm btn-success">Edit</a>
                                
                                <form action="code.php" method="POST" class="d-inline">
                                <button type="submit" class=" my-1 btn btn-sm btn-danger" name="delete_student" value="<?=$student['id'];?>"  >Delete</button>
                                </form> 

                              </td>
                          </tr>
                       <?php
                      }
                   }
                   else{
                      echo"<h4> No record Found </h4>";

                   }
                ?>
        
              </tbody>
            </table>
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