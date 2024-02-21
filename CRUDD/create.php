<?php 
include "config.php";

if(isset($_POST['submit']))
{
    $pid = $_POST['id'];
    $pname = $_POST['name'];
    $pprice = $_POST['price'];
    $pqty = $_POST['qty'];

    $q = "INSERT INTO tbl_product (id,name,price,qty) values($pid,'$pname','$pprice',$pqty)";

    $result = mysqli_query($con,$q);

    if($result){
       header("Location:index.php");
    }
    else
    {
        echo "ERROR";
    }       
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body>
    <div class="container p-3">
    <h1 class="text text-center">Data Collection Form</h1>
    <form action="#" method="post">
        
        <input type="number" class="form-control form-control-sm p-3 m-2" name="id" placeholder="Enter Product ID">
        <input type="text" class="form-control form-control-sm p-3 m-2" name="name" placeholder="Enter Product name">
        <input type="text" class="form-control form-control-sm p-3 m-2" name="price" placeholder="Enter Product price">
        <input type="number" class="form-control form-control-sm p-3 m-2" name="qty" placeholder="Enter Product Quantity">
    
        <input type="submit" class="form-control m-2 btn btn-primary" name="submit" value="Create">
    </form>
    </div>
</body>