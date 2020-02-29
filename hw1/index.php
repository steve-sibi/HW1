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

$usernameErr = $passwordErr = "";

$username = "admin";    // username
$password = "admin";    // password

/*
 * once  submit is clicked, will send a post request and check the following
 * if conditions before redirection to landing page.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();    // Start a new session after submitting
    // error message if username field is empty
    if (empty($_POST["username"])) {
        $usernameErr = "username is required";
    } else {
        // error if user inputs wrong username
        if ($_POST["username"] != $username) {
            $usernameErr = "Wrong username";
        } else {
            // error message if password field is empty
            if (empty($_POST["password"])) {
                $passwordErr = "password is required";
            } else {
                // error is password input is wrong
                if ($_POST["password"] != $password) {
                    $passwordErr = "Wrong password";
                } else {
                    // if no errors, provide session ID and redirect to landing page
                    $_SESSION['userlogin'] = "Loggedin";    // provides user with a session ID called 'Logged in'
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