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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="./login.css">

    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
        <div class="col-sm">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-space">
                            <form  method="POST"></form>
                                <div class="login">
                                    <div class="group"> <label for="user" class="label">Username</label> <input id="user" name="logname"type="text" class="input" placeholder="Enter your username" required=""> </div>
                                    <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" name="logpass"type="password" class="input" data-type="password" placeholder="Enter your password" required=""> </div>
                                    <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                                    <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                                    <div class="hr"></div>
                                    <div class="foot"> <a href="#">Forgot Password?</a> </div>
                                </div>
                                <div class="sign-up-form">
                                    <div class="group"> <label for="name" class="label">Name</label> <input id="name" name="name"type="text" class="input" placeholder="Your Name" required=""> </div>
                                    <div class="group"> <label for="email" class="label">Email</label> <input id="email" name="email"type="email" class="input"  placeholder="Your email address" required=""> </div>
                                    <div class="group"> <label for="username" class="label"></label>Username<input id="username" name="username"type="text" class="input"  placeholder="Your username" required=""> </div>
                                    <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="password"class="input" placeholder="Enter your password" required=""> </div>
                                    <div class="group"> <input type="submit" class="button" name="submit"value="Sign Up"> </div>
                                    <div class="hr"></div>
                                    <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
