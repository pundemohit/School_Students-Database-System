<?php

require 'dbcon.php';
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Edit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-5">
    
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Student View Details
              <a href="index.php" class="btn btn-danger float-end">Back</a>
            </h4>
          </div>
          <div class="card-body">

          <?php
          if(isset($_GET['id'])){
             $student_id = mysqli_real_escape_string($con, $_GET['id']);
             $query = "SELECT * FROM students WHERE id='$student_id' ";
             $query_run = mysqli_query($con, $query);

             if(mysqli_num_rows($query_run) > 0)
             {
                $student = mysqli_fetch_array($query_run);
                ?>

                     <form action="code.php" method="post">
                        <input type="hidden" name="student_id" value="<?= $student['id']?>">
                        <div class="mb-3">
                            <label for="">Student Name</label>
                            <input type="text" value="<?=$student['name'];?>" name="name" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Student Email</label>
                            <input type="text" value="<?=$student['email'];?>" name="email" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Student Phone</label>
                            <input type="text" value="<?=$student['phone'];?>" name="phone" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Student Course</label>
                            <input type="text" value="<?=$student['course'];?>" name="course" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="update_student" class="btn btn-primary" >Update Student</button>
                        </div>
                    </form>
                <?php
             }
             else{
                echo"<h4> No Such Id Found</h4>"; 
             }
          }
          ?>

           
          </div>
        </div>
      </div>
    </div>
  </div>

