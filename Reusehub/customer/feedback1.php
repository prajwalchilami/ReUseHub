<?php include'cust_header.php'; 

error_reporting(0);
if(isset($_POST['btnfeed']))
{
    $sql="insert into feedback(fb_fistname,fb_lastname,fb_email,fb_number,feedback_descr) values ('".$_POST['text_fn']."','".$_POST['text_ln']."','".$_POST['text_email']."','".$_POST['text_num']."','".$_POST['text_descc']."')";
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
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="container">
                	<form action="feedback1.php" method="POST">
                    <h2>FEEDBACK FORM</h2>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="First Name" name="text_fn" class="form-control">
                        </div>
                  
                

                        <div class="col-sm-6">
                            <input type="text" placeholder="Last Name"  name="text_ln" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="email" placeholder="Email" name="text_email" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" placeholder="Phone Number" name="text_num" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <textarea placeholder="your feedback" name="text_descc" style="border-color: blue;"  class="form-control"></textarea>
                        </div>
                    </div>
                 <br>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" name="btnfeed" value="submit" style="background-color: blue; color: white;" class="form-control">
                    </div>
                </div>
                </form>
                </div>
            </body>
</html>
<?php include'cust_footer.php'; ?>