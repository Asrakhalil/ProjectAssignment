<?php
require_once "db_connection.php";

if(isset($_POST['Login'])){

    //getting text data from the fields
    $firstName = $_POST['firstName'];
    $LastName = $_POST['LastName'];
    $inputEmail3 = $_POST['inputEmail3'];
    $inputPassword3 = $_POST['inputPassword3'];
    $optradio = $_POST['optradio'];
    $bday = $_POST['bday'];



    $insert_product = "insert into user_info ( first_name, last_name,Email,password,gender,birthday) 
                  VALUES ('$firstName','$LastName','$inputEmail3','$inputPassword3','$optradio','$bday');";
    $login = mysqli_query($con, $insert_product);
    if($login){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <?php require_once 'Links.php';?>
</head>
<body>
<?php require_once 'Header.php';?>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
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
<!--<form>  action="register.php" method="post" enctype="multipart/form-data">-->
<!--<form>-->
<form action="register.php" method="post" >
<div class="input-group col-lg-6 mx-auto mt-4">
        <label for="firstname"><b>First Name</b></label>
        <input type="text" class="form-control ml-1" id="firstName"name="firstName" placeholder="Enter First Name">
    </div>
    <div class="input-group col-lg-6 mx-auto mt-4">
        <label for="LastName"><b>Last Name</b></label>
        <input type="text" class="form-control ml-1" id="LastName" name="LastName" placeholder="Enter Last Name">
    </div>
    <div class="form-group col-lg-6 mx-auto">
        <label for="inputEmail3" class="form-label"><b>Email</b></label>
        <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Email">
    </div>
    </div>
    <div class="form-group col-lg-6 mx-auto">
        <label for="inputPassword3" class="form-label"><b>Password</b></label>
        <input type="password" class="form-control" id="inputPassword3" name="inputPassword3" placeholder="Password">
    </div>
    <div class="col-lg-6 mx-auto">
        <label class="radio-inline" class="form-check"><b>Gender</b></label>
        <input type="radio" name="optradio" value="male" checked>Male
    </label>
    <label class="radio-inline">
        <input type="radio" name="optradio" value="female" >Female
    </label>
    </div>
    <div class="col-lg-6 mx-auto">
        <label  class="form-label" ><b>Birthday</b></label>
        <input type="date" name="bday">
    </div>
    <div class="col-lg-6 mx-auto">
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
        <input class="btn btn-warning bg-primary" type="submit" name="Login" value="Login">
    </div>
</form>

<!-- Footer -->
<?php require_once 'Footer.php';?>
<!-- Footer -->

</body>


</html>