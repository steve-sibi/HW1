<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HW1</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php

//session_start();
//
//$_SESSION['userlogin'] = "Loggedin";
$usernameErr = $passwordErr = "";

$username = "admin";
$password = "admin";
# check to see if git works
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    session_start();
    if (empty($_POST["username"])) {
        $usernameErr = "username is required";
    } else {
        if ($_POST["username"] != $username) {
            $usernameErr = "Wrong username";
        } else {
            if (empty($_POST["password"])) {
                $passwordErr = "password is required";
            } else {
                if ($_POST["password"] != $password) {
                    $passwordErr = "Wrong password";
                } else {
                    $_SESSION['userlogin'] = "Loggedin";
                    header('Location: welcome.php');
                }
            }
        }
    }


}

?>

<div class="login-dark">
    <form action="index.php" method="post">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
        <div class="form-group">
            <input class="form-control" type="text" name="username" placeholder="username">
            <span class="error">* <?php echo $usernameErr; ?></span>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
            <span class="error">* <?php echo $passwordErr; ?></span>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Log In</button>
        </div>
        <a class="forgot" href="#">Forgot your email or password?</a></form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>