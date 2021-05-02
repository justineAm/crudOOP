<?php

  // Include database file
  include 'customers.php';

  $customerObj = new Customers();

  // Insert Record in customer table
  if(isset($_POST['submit'])) {
    $customerObj->insertData($_POST);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP: CRUD (Object Oriented Programming) and MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
<style>
body{
  background-image:url('./bg.jpg');
  background-repeat:no-repeat;
  background-size:cover;

}
.card {
background-color: rgba(0, 0, 0, 0.50); /* Transparent Yellow */
border-radius: 1rem;
}
.form-group input{
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}
hr.hr1{
  border: 2px solid blue;
  border-radius: 5px;
}
hr.hr2{
  border: 2px solid #ff0066;
  border-radius: 5px;
}
</style>
</head>
<body>

 

<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="card bg-image card shadow-1-strong"style="background-image: url('./bg.jpg')   width: 18rem;">
        <div class="card-body text-light">
              <div class=" text-center" style="padding:10px;">
                <h5>Journey with us? <br>Starts by filling out the form</h5>
                <hr class="hr1">
            </div>
              <form action="add.php" method="POST">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
                </div>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
                </div>
                <div class="form-group">
                  <label for="username">Username:</label>
                  <input type="text" class="form-control" name="username" placeholder="Enter username" required="">
                </div>
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter password" required="">
                </div>
                <hr class="hr2">
                <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
              </form>
            </div>
      </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>