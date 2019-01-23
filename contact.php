<?php
require "db_connection.php";

if(isset($_POST['submit'])){
    print_r($_POST);
    //getting text data from the fields
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $text = $_POST['text'];




    $insert_product = "insert into contacts (fullname, email, phone, msg) 
                  VALUES ('$fullname ','$email ','$tel','$text');";
    echo $insert_product;
    $login = mysqli_query($con, $insert_product);
    if($login){
        header("location: ".$_SERVER['PHP_SELF']);
    }

}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" >
<head>
   <!-- <meta charset="UTF-8">
    <meta name="description" content="product and services comparison">
    <meta name="keywords" content="HTML,CSS,bootstrap">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="dist/css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.js"></script>-->
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



    <div class="container col-lg-6 mx-auto  mt-4 table-bordered bg-info">
    <form  action="contact.php" method="post" name="contact">
        <h1>Contact Form</h1>

            <div class="form-label">
                <input type="text" class="form-control ml-1" id="fullname" name="fullname" placeholder="Enter Full Name">
            </div>

        <fieldset>
            <div class="mt-2">
            <input placeholder="Your Email Address" class="form-control ml-1" type="email"  id="email" name="email">
            </div>
        </fieldset>
        <fieldset>
            <div class="mt-2">
            <input placeholder="Your Phone Number" class="form-control ml-1" type="tel" id="tel" name="tel">
            </div>
        </fieldset>
        <fieldset>
            <div class="mt-2">
            <textarea placeholder="Type your message here...." class="form-control ml-1" name ="text"> </textarea>
            </div>
        </fieldset>
        <fieldset>
            <div class="mt-2">
                <input class="btn btn-warning bg-primary" type="submit" name="submit" value="submit">
            </div>
        </fieldset>
    </form>
    </div>


<!-- Footer -->
<?php require_once 'Footer.php';?>
<!-- Footer -->
</body>


</html>