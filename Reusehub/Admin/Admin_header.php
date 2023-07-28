<?php 
$conn=mysqli_connect("localhost","root","","reusehub");
if($conn==true)
{
  echo"Database Connected";

}
else
{
  echo"Database Not Connected";
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ReUseHub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="Homepage.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="category.php">CATAGORY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="catagory_list.php">CATAGORY LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product_sell.php">PRODUCT SELL</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="product_list.php">PRODUCT LIST</a>
        </li>
        
      </ul>
      <form class="d-flex">
        
        <button class="btn btn-warning" type="submit">LOGOUT</button>
      </form>
    </div>
  </div>
</nav>