<?php include'cust_header.php'; 

error_reporting(0);

if(isset($_POST['btnbook']))
{
    $sql="insert into booking(book_fname,book_lname,book_email,book_number,book_quanti,book_address,book_city,book_region) values ('".$_POST['text_bfn']."','".$_POST['text_bln']."','".$_POST['text_bemail']."','".$_POST['text_bno']."','".$_POST['text_bquant']."','".$_POST['text_badd']."','".$_POST['text_bcity']."','".$_POST['text_region']."')";
    if(mysqli_query($conn,$sql))
    {
     echo "<script>alert('Record Inserted')</script>";
    }
    else
    {
     echo "<script>alert('Record Not Inserted')</script>".mysqli_error($conn);
    }

}






?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
<div class="container">
    <form action="booking.php" method="POST">
    <h2>Product Booking Form</h2>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <label for="">First Name</label>
            <input type="text" placeholder="Enter first name" class="form-control" name="text_bfn" required  onkeypress="javascript:return isString(event)">
        </div>
        <div class="col-sm-4">
            <label for="">Last Name</label>
            <input type="text" placeholder="Enter last name" class="form-control" name="text_bln" required  onkeypress="javascript:return isString(event)">
        </div>
        <div class="col-sm-2"></div>
        <br>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <label for="">Email</label>
            <input type="email" placeholder="Enter Email" class="form-control" name="text_bemail" required>
        </div>
        <div class="col-sm-2"></div>
        <br>
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <label for="">contact</label>
            <input type="text" placeholder="Enter Contact" class="form-control" name="text_bno" maxlength="10" minlength="10" required onkeypress="javascript:return isNumber(event)">
        </div>
        <div class="col-sm-4">
            <label for="">Quantity</label>
            <input type="number" placeholder="Enter Product Quantity" class="form-control" name="text_bquant" required>
        </div>
        <div class="col-sm-2"></div>
        <br>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <label for="">Shipping Address</label>
      <textarea  id="" placeholder="Entar Address" class="form-control" name="text_badd" required></textarea>
        </div>
        <div class="col-sm-2"></div>
        <br>
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <label for="">City</label>
            <input type="text" placeholder="Enter City" class="form-control" name="text_bcity" required>
        </div>
        <div class="col-sm-4">
            <label for="">Region</label>
            <input type="text" placeholder="Enter Region" class="form-control" name="text_region" required>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br>
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-2">
    <input type="submit" value="book" name="btnbook" class="form-control">
    </div>
    <div class="col-sm-8"></div>
    </div>
    </form>
</div>
</div>
<div class="col-sm-2"></div>
</div>
<?php include'cust_footer.php'; ?>