<?php include'Admin_header.php';


if(isset($_POST['btnsell']))
{
    $sql="insert into product_sell(product_img,product_Deatils,product_cond,product_price,product_quantity) values ('".$_POST['text_img']."','".$_POST['text_deatil']."','".$_POST['text_cond']."','".$_POST['text_price']."','".$_POST['text_quant']."')";
    if(mysqli_query($conn,$sql))
    {
     echo "<script>alert('Record Inserted')</script>";
    }
    else
    {
     echo "Record Not Inserted".mysqli_error($conn);
    }

}




 ?>
 <html>
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
<body>
<br>
<form action="product_sell.php" method="POST">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>Product Image</h3>
				<input type="file" name="text_img" class="form-control" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3>Product Details</h3>
				<input type="text" name="text_deatil" class="form-control" placeholder="Enter product Details" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3>Product Condition</h3>
				<input type="text" name="text_cond" class="form-control" placeholder="Enter product Condition" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3>Product Price</h3>
				<input type="number" name="text_price" class="form-control" placeholder="Enter product Price" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3>Product Quantity</h3>
				<input type="number" name="text_quant" class="form-control" placeholder="Enter product Quantity" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				
				     <div class="col-sm-4">
    <input style="color:white; background: blue;" type="submit" value="submit" name="btnsell" class="form-control">
				
			</div>
			
		</div>



	</div>
</form>
</body>
</html>

<?php include'Admin_footer.php' ?>