<?php

// Include database file
include 'customers.php';

$customerObj = new Customers();

// Edit customer record
if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $customer = $customerObj->displyaRecordById($editId);
}

// Update Record in customer table
if (isset($_POST['update'])) {
    $customerObj->updateRecord($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP CRUD:</title>
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
        h4.title{
            color:#cc0099;
        }
        h4.title1{
            color:#0000ff;
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

<div class="card text-center" style="padding:15px;">
  <h4 class="title1"> UPDATE YOUR </h4><h4 class="title">PERSONAL INFORMATION</h4>
</div><br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="card bg-image card shadow-1-strong"
        style="background-image: url('./bg.jpg')   width: 25rem;">
        <div class="card-body text-light">
                <div class="container">
                    <form action="edit.php" method="POST">
                        <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="uname" value="<?php echo $customer['name']; ?>" required="">
                        </div>
                        <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="uemail" value="<?php echo $customer['email']; ?>" required="">
                        </div>
                        <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="upname" value="<?php echo $customer['username']; ?>" required="">
                        </div>
                        <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $customer['id']; ?>">
                        <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>