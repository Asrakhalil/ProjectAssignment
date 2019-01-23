<!DOCTYPE html>

<html lang="en">
<head>
  <!--  <meta charset="UTF-8">
    <meta name="description" content="product and services comparison">
    <meta name="keywords" content="HTML,CSS,bootstrap">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="dist/css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.js"></script>-->
    <?php require_once 'Links.php';?>
</head>
<body>
<?php require_once 'Header.php';?>

<!--<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#"><img src="images/logoo.png" width="120"/></a>
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
                <!--<button type="button" class="btn btn-primary btn-block "href="login.php">Login</button>-->
          <!--      <a type="button" class="btn btn-primary btn-block" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a type="button" class="btn btn-success btn-block ml-1" href="register.php">Register</a>
            </li>
        </ul>

    </div>
</nav> -->

<form>
    <div class="form-group col-lg-6 mx-auto mt-4">
        <label for="exampleInputEmail1"><b>Enter Email address</b></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group col-lg-6 mx-auto">
        <label for="exampleInputPassword1"><b>Password</b></label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="nav-item col-lg-6 mx-auto">
        <a class="nav-link" href="forget_password.php">Forgot password?</a>
    </div>
    <div class="form-group form-check col-lg-6 mx-auto">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"for="exampleCheck1">Check me out</label>
    </div>
    <div class="col-md-7 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        <!--<button type="submit" class="btn btn-primary align-middle">Submit</button>-->
</form>

<!-- Footer -->
<?php require_once 'Footer.php';?>
<!-- Footer -->
</body>
</html>