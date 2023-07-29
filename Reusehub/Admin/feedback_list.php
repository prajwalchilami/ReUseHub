<?php include'Admin_header.php'; 

error_reporting(0);

if (isset($_POST['btndelete']))
{
  $sql="delete from feedback where id='".$_POST['txt_id']."'";
  if(mysqli_query($conn,$sql))
  {
    echo "<script>alert('Record Deleted')</script>";
  }
  else

  {
    echo "<script>alert('Record Not Deleted')</script>";
  }
}

?>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
    <br>
    <h1>FeedBack List</h1>
    <br>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
       <th scope="col">Email</th>
      <th scope="col">Contact No.</th>
     
      <th scope="col">Feedback</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $i=1;
$sql=mysqli_query($conn,"select * from feedback");
while ($row=mysqli_fetch_assoc($sql))
{
   echo '<tr>
   <form action="feedback_list.php" method="post">
   <th scope="row">'.$i++.'</th>
   <input type="hidden" name="txt_id" value="'.$row['id'].'">


    <td>'.$row['fb_fistname'].'</td>


  <td> '.$row['fb_lastname'].' </td>
  
   <td>'.$row['fb_email'].'</td>

   <td>'.$row['fb_number'].'</td>

   <td>'.$row['feedback_descr'].'</td>


  

     <td> <input type="submit" name="btndelete" class="btn btn-danger" value="Delete"></td>
     </form>
    </tr>';
  }
?>

  </tbody>
</table>
</div>
<div class="col-sm-1"></div>
</div>
<?php include'Admin_footer.php'; ?>