<?php include'Admin_header.php'; 


if(isset($_POST['btnsignup']))
{
    $sql="insert into signup(Name,Contact,Email,Address,Password,Confirm_Password) values ('".$_POST['si_name']."','".$_POST['si_contact']."','".$_POST['si_email']."','".$_POST['si_address']."','".$_POST['si_password']."','".$_POST['si_cpassword']."')";
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

 
<form action="signup.php" method="POST">
   <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
<div class="container">
    <h2 style="color: black;">Sign Up</h2>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5> Full Name<span>*</span></h5>
            <input type="text" name="si_name" placeholder="Enter Full Name" class="form-control">
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5>Contact No.<span>*</span></h5>
            <input type="text" name="si_contact" minlength="10" maxlength="10" placeholder="Enter Contact No." class="form-control">
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5>Email<span>*</span></h5>
            <input type="email" name="si_email" placeholder="Enter  email" class="form-control">
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h5>Address</h5>
            <textarea name="si_address" id="" class="form-control" placeholder="Enter Address"  ></textarea>
        </div>
            <div class="col-sm-2"></div>
</div>
<br>
<div class="row">
<div class="col-sm-2"></div>
        <div class="col-sm-4">
        <h5>Passsward<span>*</span></h5>
            <input type="passward" name="si_password" placeholder="Enter Passward" class="form-control">
        </div>



      
        <div class="col-sm-4">
        <h5>Confirm Passsward<span>*</span></h5>
            <input type="passward" name="si_cpassword" placeholder="Enter Passward" class="form-control">
        </div>
        <div class="col-sm-2"></div>
           </div>
          <br>
          <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
    <input style="color:black;" type="submit" value="submit" name="btnsignup" class="form-control">
    </div>
    <div class="col-sm-4"></div>
</div>
</form>
</div>
</div>
<div class="col-sm-3"></div>
</div>





<?php include'Admin_footer.php';?>