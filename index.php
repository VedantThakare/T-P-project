<?php
include("process_form.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Placement Portal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <style>
    body{
      /* background-image: url("https://image.free-apply.com/gallery/l/uni/gallery/lg/1035601859/0ddb001911c430cd6570d2e458ea4d98895786db.jpg?s=640");
      background-repeat: no-repeat;
      background-size: cover; */
      background-color: violet;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Student Placement Details Form</h2>
  <form action="process_form.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="placement_company">Placement Company:</label>
      <input type="text" class="form-control" id="placement_company" name="placement_company" required>
    </div>
    <div class="form-group">
      <label for="placement_package">Placement Package:</label>
      <input type="text" class="form-control" id="placement_package" name="placement_package" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>





</body>
</html>
