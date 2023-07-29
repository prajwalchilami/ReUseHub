<?php include'cust_header.php';
error_reporting(0);

if(isset($_POST['btnbuy']))
{
        header('location:booking.php');
    }
   








 ?>
 <html>
 <body>
  <style type="text/css">
  body
  {
    background-image: url(cart.jpeg);
    background-size: cover;
  }
  h3
  {
    color: white;
  }
</style>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
    <br>
    <h1>Product List</h1>
    <br>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Details</th>
      <th scope="col">Condition</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
   
    </tr>
  </thead>
  <tbody>
   <?php
    $i=1;
$sql=mysqli_query($conn,"select * from product_sell");
while ($row=mysqli_fetch_assoc($sql))
{
   echo '<tr>
   <form action="product_list.php" method="post">
   <th scope="row">'.$i++.'</th>
   <input type="hidden" name="txt_id" value="'.$row['id'].'">
    <td>

  <input type="text" name="txt_pimage" value="'.$row['product_img'].'" class="form-control"> </td>


  <td> <input type="text" name="txt_pdetail" value="'.$row['product_Deatils'].'" class="form-control"> </td>
  
   <td><input type="text" name="txt_pcond" value="'.$row['product_cond'].'" class="form-control"></td>

   <td><input type="text" name="txt_pprice" value="'.$row['product_price'].'" class="form-control"></td>

<td><input type="text" name="txt_quant" value="'.$row['product_quantity'].'" class="form-control"></td>


   <td><input type="submit" name="btnbuy" class="btn btn-success" value="BUY"></td>

    
     </form>
    </tr>';
  }
?>

  </tbody>
</table>
</div>
<div class="col-sm-1"></div>
</div>
</body>
</html>
<?php include'cust_footer.php'; ?>