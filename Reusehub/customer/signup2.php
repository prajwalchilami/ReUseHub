<?php include'cust_header.php'; 


if(isset($_POST['btnusignup']))
{
    $sql="insert into user_signup(user_name,user_contact,user_email,user_address,user_password) values('".$_POST['ui_name']."','".$_POST['ui_contact']."','".$_POST['ui_email']."','".$_POST['ui_address']."','".$_POST['ui_password']."')";
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
<style type="text/css">
     .container
    {
        background: linear-gradient(to bottom, #6699ff 83%, #ffffcc 64%);
        padding: 10px;
        box-shadow: 2px 2px 4px 4px black;
        margin-top: 20px;
    }
    body
    {
        background-image: url(signupimg.png);
        background-size: cover;
    }
    h5
    {
        color: black;
    }
</style>

 
<form action="signup2.php" method="POST">
   <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
<div class="container">
    <h2 style="color: black;">Sign Up</h2>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5> Full Name<span>*</span></h5>
            <input type="text" name="ui_name" placeholder="Enter Full Name" class="form-control">
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5>Contact No.<span>*</span></h5>
            <input type="text" name="ui_contact" minlength="10" maxlength="10" placeholder="Enter Contact No." class="form-control">
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5>Email<span>*</span></h5>
            <input type="email" name="ui_email" placeholder="Enter  email" class="form-control">
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5>Address</h5>
            <textarea name="ui_address" id="" class="form-control" placeholder="Enter Address"  ></textarea>
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
<div class="col-sm-2"></div>
        <div class="col-sm-4">
        <h5>Passsward<span>*</span></h5>
            <input type="passward" name="ui_password" placeholder="Enter Passward" class="form-control">
        </div>



      
        <div class="col-sm-4">
        <h5>Confirm Passsward<span>*</span></h5>
            <input type="passward" name="ui_cpassword" placeholder="Enter Passward" class="form-control">
        </div>
        <div class="col-sm-2"></div>
           </div>
          <br>
          <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
    <input style="color:black;" type="submit" value="submit" name="btnusignup" class="form-control">
    </div>
    <div class="col-sm-4"></div>
</div>
</form>
</div>
</div>
<div class="col-sm-3"></div>
</div>





<?php include'cust_footer.php';?>