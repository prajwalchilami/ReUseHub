<?php include'Admin_header.php';


if(isset($_POST['btnsubmit']))
{
    $sql="insert into category(cat_img,cat_name,cat_details,cat_price) values ('".$_POST['textc_img']."','".$_POST['textc_name']."','".$_POST['textc_detail']."','".$_POST['textc_price']."')";

    
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
<br>
<form action="category.php" method="POST">
	<div class="container">

		<div class="row">
			<div class="col-sm-6">
				<h3>Category Image</h3>
				<input type="file" name="textc_img" class="form-control" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3>Category Name</h3>
				<input type="text" name="textc_name" class="form-control" placeholder="Enter product Details" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3>Category Details</h3>
				<input type="text" name="textc_detail" class="form-control" placeholder="Enter product Details" required>
				
			</div>
			
		</div>
		

		<div class="row">
			<div class="col-sm-6">
				<h3>Category Price</h3>
				<input type="number" name="textc_price" class="form-control" placeholder="Enter product Price" required>
				
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-sm-6">
				
				     <div class="col-sm-4">
    <input style="color:white; background:blue;" type="submit" value="submit" name="btnsubmit" class="form-control">
				
			</div>
			
		</div>



	</div>
</form>
</body>
</html>
<?php include'Admin_footer.php'; ?>