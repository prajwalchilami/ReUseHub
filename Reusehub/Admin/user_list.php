<?php include'Admin_header.php'; 

error_reporting(0);

if (isset($_POST['btndelete']))
{
  $sql="delete from user_signup where id='".$_POST['txt_id']."'";
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
    <h1>Users List</h1>
    <br>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User Contact</th>
       <th scope="col">User Email</th>
      <th scope="col">User Address</th>
     
      <th scope="col">User Password</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $i=1;
$sql=mysqli_query($conn,"select * from user_signup");
while ($row=mysqli_fetch_assoc($sql))
{
   echo '<tr>
   <form action="user_list.php" method="post">
   <th scope="row">'.$i++.'</th>
   <input type="hidden" name="txt_id" value="'.$row['id'].'">


    <td>'.$row['user_name'].'</td>


  <td> '.$row['user_contact'].' </td>
  
   <td>'.$row['user_email'].'</td>

   <td>'.$row['user_address'].'</td>

   <td>'.$row['user_password'].'</td>


  

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