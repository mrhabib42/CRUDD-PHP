<?php 
include "config.php";
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
  <div class="container mt-3">
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $q = "SELECT * from tbl_product";
           $result = mysqli_query($con, $q);
          
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <tr>
              <td>' . $row['id'] . '</td>
              <td>' . $row['name'] . '</td>
              <td>' . $row['price'].  '</td>
              <td>' . $row['qty'] . '</td>
              <td>
              <a href="edit.php? edt_id='.$row['id'].'" class="btn btn-primary">Edit</a>
              <a href="delete.php? del_id='.$row['id'].'"  class="btn btn-danger">Delete</a>
              </td>
            </tr>
            ';
          }
          ?>
          </tbody>
      </table>
      <a href="create.php" class="btn btn-warning">Create</a>
      </div>
      
    </body>
</html>