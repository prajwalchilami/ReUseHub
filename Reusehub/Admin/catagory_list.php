<?php include'Admin_header.php'; 
error_reporting(0);
if (isset($_POST['btndelete']))
{
  $sql="delete from category where id='".$_POST['txt_id']."'";
  if(mysqli_query($conn,$sql))
  {
    echo "<script>alert('Record Deleted')</script>";
  }
  else

  {
    echo "Record Not Deleted";
  }
}

if(isset($_POST['btnupdate']))
{
  $sql="update category set cat_name='".$_POST['txt_cname']."',cat_img='".$_POST['txt_cimage']."',cat_details='".$_POST['txt_desccr']."',cat_price='".$_POST['txt_price']."' where id='".$_POST['txt_id']."'";
  if(mysqli_query($conn,$sql))
  {
    echo "<script>alert('Record Updated')</script>";
  }
  else
  {
    echo "Record Not Updated";
  }
}
?>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10">
    <br>
    <h1>Category List</h1>
    <br>

<table class="table table-sm">
  <thead>
    <tr>
     <!--  <th scope="col">ID</th>
     
    
     
      -->
       <th scope="col">ID</th> 
  <th scope="col">Image</th> 
      
       <th scope="col">Name</th>
        <th scope="col">Details</th> 
       <th scope="col">price</th>
    </tr>

  </thead>
  <tbody>

    <?php
    $i=1;
$sql=mysqli_query($conn,"select * from category");
while ($row=mysqli_fetch_assoc($sql))
{
   echo '<tr>
   <form action="catagory_list.php" method="post">
   <th scope="row">'.$i++.'</th>
   <input type="hidden" name="txt_id" value="'.$row['id'].'">
    <td>

  <input type="text" name="txt_cimage" value="'.$row['cat_img'].'" class="form-control"> </td>


  <td> <input type="text" name="txt_cname" value="'.$row['cat_name'].'" class="form-control"> </td>
  
   <td><input type="text" name="txt_desccr" value="'.$row['cat_details'].'" class="form-control"></td>

   <td><input type="text" name="txt_price" value="'.$row['cat_price'].'" class="form-control"></td>

   <td><input type="submit" name="btnupdate" class="btn btn-success" value="Update"></td>

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