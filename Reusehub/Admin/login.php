
<?php include'Admin_header.php';
error_reporting(0);

if(isset($_POST['btnlogin']))
{
    $sql=mysqli_query($conn,"select * from signup where Email='".$_POST['txt_username']."' and Password='".$_POST['txt_password']."'");

    $row=mysqli_fetch_assoc($sql);
    if($row['Email']==$_POST['txt_username'] && $row['Password']==$_POST['txt_password'])
    {
        header('location:Homepage.php');
    }
    else
    {
        echo "<script>alert('Login Fail')</script>";
    }





}
  


 ?>

 <html>
 <body>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="container">
    <form action="login.php" method="POST">
    <h2>Login Form</h2>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <label for="">Username</label>
            <input type="text"name="txt_username" placeholder="Enter Username" class="form-control">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <label for="">Password</label>
            <input type="password" name="txt_password" placeholder="Enter password" class="form-control">
        </div>
        <div class="col-sm-1"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
    <input type="submit" value="login" name="btnlogin" class="form-control">
    </div>
    <div class="col-sm-4"></div>
</div>
<br>
   <a href="signup.php" >Don't have an account</a>  
   </form>
</div>
<div class="col-sm-4"></div>

</div>
</body>
</html>
<?php include'Admin_footer.php';