<?php include 'inc/adminheader.php';?>
<?php include 'inc/adminsidebar.php';?>
		
            <div class="box round first grid">
                <h2>Update Social Media</h2>
                <div class="block"> 

<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
         $facebook = $fm->validation($_POST['facebook']);
         $twitter = $fm->validation($_POST['twitter']);
         $LinkedIn = $fm->validation($_POST['linkedin']);
         $googleplus = $fm->validation($_POST['googleplus']);

         $facebook = mysqli_real_escape_string($db->link,$_POST['facebook']);
         $twitter = mysqli_real_escape_string($db->link,$_POST['twitter']);
         $LinkedIn = mysqli_real_escape_string($db->link,$_POST['linkedin']);
         $googleplus = mysqli_real_escape_string($db->link,$_POST['googleplus']);
      
        if($facebook=="" || $twitter=="" || $LinkedIn=="" || $googleplus=="")
        {
            echo "<span class ='error' >Filled Should Not be Empty </span>";
        } else{
                $socialquery="update forsocialmedia set
                   fb    = '$facebook',
                   tw   = '$twitter',
                   ln    = '$LinkedIn',
                   gplus    = '$googleplus'
                   where id = 1 ";
                $socialupdateresult = $db->update($socialquery);
                if($socialupdateresult){
                    echo "<span class ='success' >Data Updated Successfully...</span>";
                }else{
                    echo "<span class ='error' >Data Not Updated </span>";
                }
      }

     }

?> 
<?php
        $query = "select * from forsocialmedia where id = 1";
        $result = $db->select($query);
        if($result){
            while ($value = $result->fetch_assoc()) {

?>              
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Facebook</label>
                            </td>
                            <td>
                                <input type="text" name="facebook" value="<?php echo $value['fb'];?>" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Twitter</label>
                            </td>
                            <td>
                                <input type="text" name="twitter" value="<?php echo $value['tw'];?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>LinkedIn</label>
                            </td>
                            <td>
                                <input type="text" name="linkedin" value="<?php echo $value['ln'];?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                                <label>Google Plus</label>
                            </td>
                            <td>
                                <input type="text" name="googleplus" value="<?php echo $value['gplus'];?>" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php } }?>
                </div>
            </div>
<?php include 'inc/adminfooter.php';?>