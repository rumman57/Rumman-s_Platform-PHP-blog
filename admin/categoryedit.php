<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
<?php
  if(!isset($_GET['catedit']) && $_GET['catedit'] ==NULL )
  {
    // header("Location:catlist.php");
     echo "<script>window.location = 'catlist.php'</script>";
  }
  else{
    $id = $_GET['catedit'];
  }

?>
		
            <div class="box round first grid">
                <h2>Edit Category</h2>
               <div class="block copyblock">

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $name = $_POST['name'];
        if(empty($name))
        {
            echo "<span class='error'>Field Should Not be Empty</span>";
        }else{
            $query = "update forcat set name = '$name' where id = '$id'";
            $update = $db->update($query);
            if($update)
            {
                //echo "<span class='success'>Category Updated Successfully...</span>";
                echo "<script>alert('Category Updated Successfully...')</script>";
                echo "<script>window.location = 'catlist.php'</script>";

            }
            else{
                echo "<span class='error'>Category Not Updated </span>";
            }
        }
      }

?>
   <?php

     $query1= "select * from forcat where id = $id";
     $result1 = $db->select($query1); 
     if($result1)
     {
        while ( $value1 = $result1->fetch_assoc()) {
        
   ?>
                 <form action="" method = "post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name = "name" value="<?php echo $value1['name'];?>" class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>

                <?php }} ?>
                </div>
            </div>
<?php include 'inc/adminfooter.php'; ?>   
        