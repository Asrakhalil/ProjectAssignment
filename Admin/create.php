<?php
include ('../connection.php'); // ../ use for to go back one folder
error_reporting( E_ALL );

if(!$con1)
    die("Connection failed");
if(isset($_POST['company'])) {
    $comp = $_POST['comp'];
    $sql="INSERT INTO companies (comp) VALUES ('$comp')";
    $result = mysqli_query($con1,$sql);
    if (!$result) {
        echo 'Error: ';
    }
    else{
        header('Location: company.php?msg=Successfully Inserted');
    }
}
if(isset($_POST['submit'])) {
    $model = $_POST['model'];
    $model_id = $_POST['comp'];
    $sql="INSERT INTO models (model,company_id) VALUES ('$model','$model_id')";
    $result = mysqli_query($con1,$sql);
    if (!$result) {
        echo 'Error: ';
    }
    else{
        header('Location: models.php?msg=Successfully Inserted');
    }
}
if(isset($_POST['submit1'])) {
    $OS = $_POST['OS'];
    $UI = $_POST['UI'];
    $dimensions = $_POST['dimensions'];
    $weight = $_POST['weight'];
    $SIM = $_POST['SIM'];
    $colors = $_POST['colors'];
    $CPU = $_POST['CPU'];
    $chipset= $_POST['chipset'];
    $technology = $_POST['technology'];
    $size = $_POST['size'];
    $resolution = $_POST['resolution'];
    $builtin = $_POST['builtin'];
    $card = $_POST['card'];
    $main = $_POST['main'];
    $features = $_POST['features'];
    $front = $_POST['front'];
    $capacity = $_POST['capacity'];
    $price = $_POST['price'];
    $model_ID = $_POST['model_ID'];

    $sql="INSERT INTO mobiledata (OS,UI,dimensions,weight,SIM,colors,CPU,chipset,technology,size,resolution,builtin,card,main,features,front,capacity,price,model_ID)
          VALUES ('$OS','$UI','$dimensions','$weight','$SIM','$colors','$CPU','$chipset','$technology','$size','$resolution','$builtin','$card','$main','$features','$front','$capacity','$price','$model_ID')";
    $result = mysqli_query($con1,$sql);
    if (!$result) {
        echo 'Error: ',mysqli_error($con1);
    }
    else{
        header('Location: showMobileData.php?msg=Successfully Inserted');
    }
}
?>




































































































