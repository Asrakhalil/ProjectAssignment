<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
   <!-- <meta charset="UTF-8">
    <meta name="description" content="product and services comparison">
    <meta name="keywords" content="HTML,CSS,bootstrap">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> forget-password </title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="dist/css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.js"></script> -->
    <?php require_once 'Links.php';?>
</head>
<body>
<?php require_once 'Header.php';?>
<!--<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#"><img src="images/logoo.png" width="170"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a type="button" class="btn btn-primary btn-block" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a type="button" class="btn btn-success btn-block ml-1" href="register.php">Register</a>
            </li>
        </ul>

    </div>
</nav>-->
</body>

<form>
    <div class="col-lg-6 mx-auto mt-4">
        <label class="form-label "><b>Enter Email</b></label>
        <input class="form-control" type="email" name="email" placeholder="Enter Your email ">
    </div>
    <div class="col-lg-6 mx-auto">
        <label class="form-label "><b>Enter Password</b></label>
        <input class="form-control" type="password" name="rpassword" placeholder="Enter Your Password ">
    </div>
    <div class="col-lg-6 mx-auto">
        <label class="form-label "><b>Confirm Password</b></label>
        <input class="form-control" type="password" name="rpassword" placeholder="confirm Your Password ">
    </div>
    <div class="col-lg-6 mx-auto mt-2">
        <input class="btn btn-warning bg-primary" type="submit" name="login" value="Login">
    </div>
</form>

<!-- Footer -->
<?php require_once 'Footer.php';?>
<!-- Footer -->

</body>
</html>