<!DOCTYPE html>
<html lang="en">
<?php
include ('../connection.php'); // ../ use for to go back one folder

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile Comparision Website</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script>
        if (window.location.search.indexOf('msg=') > -1) {
            setTimeout(function(){
                window.location.href="showMobileData.php"
            }, 5000);
        }
    </script>

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Mobile Comparision</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Admin</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="company.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Add Company</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="models.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Add Model</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="showMobileData.php">
                <i class="fas fa-fw fa-mobile"></i>
                <span>Mobile Data</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">
                <i class="fas fa-fw fa-mobile"></i>
                <span>login</span></a>
        </li>
    </ul>


    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
            <div class="card">
                <div class="card-header">Mobile Data</div>
                <div class="card-body">
                    <?php if(isset($_GET['msg'])){ ?>
                        <div class="alert alert-success">
                            <?php
                            if (isset($_GET['msg'])) {
                                echo $_GET["msg"];
                            }?>
                        </div>
                        <?php
                    }
                    ?>
                    <form action="create.php" method="post">
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter OS</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="OS" placeholder="Enter OS">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter UI</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="UI" placeholder="Enter UI">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Dimensions</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="dimensions" placeholder="Enter Dimensions">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Weight</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="weight" placeholder="Enter Weight">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter SIM</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="SIM" placeholder="Enter SIM">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Color</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="colors" placeholder="Enter Color">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter CPU</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="CPU" placeholder="Enter CPU">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Chipset</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="chipset" placeholder="Enter Chipset">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Technology</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="technology" placeholder="Enter Technology">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Size</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="size" placeholder="Enter Size">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Resolution</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="resolution" placeholder="Enter Resolution">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Built_IN</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="builtin" placeholder="Enter Built_IN">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Card</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="card" placeholder="Enter Card">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Main</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="main" placeholder="Enter Main">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Features</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="features" placeholder="Enter Features">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Front</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="front" placeholder="Enter Front">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Capacity</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="capacity" placeholder="Enter Capacity">
                        </div>
                        <div class="form-group mt-4 col-md-4">
                            <label for="exampleInputname"><b>Enter Price</b></label>
                            <input type="name" class="form-control" id="exampleInputname" name="price" placeholder="Enter Price">
                        </div>
                        <div class="form-check">
                            <fieldset>
                                <p>
                                    <label><b>Select model</b></label>
                                    <select name="comp">
                                        <?php
                                        $sql= "SELECT comp,model FROM companies,models";
                                        $result = $con1->query($sql);
                                        if($result->num_rows>0)
                                        {
                                            while($row = $result->fetch_assoc()) {
                                                $idd = $row['comp_id'];
                                                $name = $row['comp'];
                                                $model=$row['model_id'];
                                                $mname=$row['model'];
                                                $cpid=$row['company_id'];
                                                echo "<option value = '.$idd.','.$model.'>$name $mname</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </p>
                            </fieldset>
                        </div>
                        <div class="form-group form-check">
                            <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                        </div>
                        <!--<button type="submit" class="btn btn-primary align-middle">Submit</button>-->
                    </form>


                </div>
                <div class="card-footer"></div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Mobile Data</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <th>OS</th>
                            <th>UI</th>
                            <th>Dimensions</th>
                            <th>Weight</th>
                            <th>SIM</th>
                            <th>Colors</th>
                            <th>CPU</th>
                            <th>Chipset</th>
                            <th>Technology</th>
                            <th>Size</th>
                            <th>Resolution</th>
                            <th>Built_IN</th>
                            <th>Card</th>
                            <th>Main</th>
                            <th>Features</th>
                            <th>Front</th>
                            <th>Capacity</th>
                            <th>Price</th>
                            <th>Model</th>
                            <th>Company</th>

                            </thead>
                            <?php
                            $sql= "SELECT * FROM mobiledata";
                            $result = $con1->query($sql);
                           if($result->num_rows>0)
                           {
                                while($row = $result->fetch_assoc()) {
                                    $model_ID=$row['model_ID'];
                                    echo $model_ID;
                                    $Modelsql = "SELECT model,company_id FROM models where model_id=$model_ID";
                                    $Modelresult = $con1->query($Modelsql);
                                    $Modelrow = $Modelresult->fetch_assoc();
                                    $GetCompanyId=$Modelrow['company_id'];
                                    $Companysql= "SELECT comp FROM companies where comp_id=$GetCompanyId ";
                                    $Companyresult = $con1->query($Companysql);
                                    $Companyrow = $Companyresult->fetch_assoc();
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["OS"];
                                    echo"</td>";
                                    echo "<td>";;
                                    echo $row["UI"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["dimensions"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["weight"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["SIM"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["colors"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["CPU"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["chipset"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["technology"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["size"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["resolution"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["builtin"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["card"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["main"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["features"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["front"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["capacity"];
                                    echo"</td>";
                                    echo "<td>";
                                    echo $row["price"];
                                    echo"</td>";
                                    echo "<td class='bg-info text-light' >" . $Modelrow['model'] ."</td>";
                                    echo "<td class='bg-success text-light'>" . $Companyrow['comp'] ."</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </table>
                    </div>
                </div>



                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2018</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
