<!DOCTYPE html>
<html lang="en">
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

    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/01.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/02.jpg" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    <div class="row mt-3">
        <div class="col-lg-6 mt-4">
            <h1>
                Welcome to Mobcom
            </h1>
            <p class="pl-3">
                We want to provide users to compare products like mobile phones with user friendly UI and features.Comparison between two devices and show result to the user according to device specification so user can decide which phone is best for use and to buy.
            </p>
        </div>
            <div class="col-lg-6">
                <img src="images/03.jpg" class="img-thumbnail text-center float-right">
            </div>
    </div>
 


    </div>

    <!-- Footer -->
    <?php require_once 'Footer.php';?>
    <!-- Footer -->
    </body>


</html>