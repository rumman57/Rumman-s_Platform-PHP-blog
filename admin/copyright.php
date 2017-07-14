<?php include 'inc/adminheader.php';?>
<?php include 'inc/adminsidebar.php';?>
		
            <div class="box round first grid">
                <h2>Update Copyright Text</h2>
                <div class="block copyblock"> 


<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
         $copyright = $fm->validation($_POST['copyright']);

         $copyright = mysqli_real_escape_string($db->link,$_POST['copyright']);
      
        if($copyright=="")
        {
            echo "<span class ='error' >Filled Should Not be Empty </span>";
        } else{
                $footerquery="update forfooter set
                   copyright    = '$copyright'
                   where id = 1 ";
                $crresult = $db->update($footerquery);
                if($crresult){
                    echo "<span class ='success' >Data Updated Successfully...</span>";
                }else{
                    echo "<span class ='error' >Data Not Updated </span>";
                }
      }

     }

?> 
<?php
        $query = "select * from forfooter where id = 1";
        $result = $db->select($query);
        if($result){
            while ($value = $result->fetch_assoc()) {

?>  
                 <form action="" method="post"> 
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" value="<?php echo $value['copyright'];?>" name="copyright" class="large" />
                            </td>
                        </tr>
						
						 <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php } } ?>
                </div>
            </div>
<?php include 'inc/adminfooter.php';?>