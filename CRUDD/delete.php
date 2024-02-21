<?php
include "config.php";

$id = $_GET['del_id'];

$q = "DELETE from tbl_product where id='$id'";
$result = mysqli_query($con,$q);

if($result)
{
    header("Location:index.php");
}
else
{
    echo "Error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
</body>
</html>