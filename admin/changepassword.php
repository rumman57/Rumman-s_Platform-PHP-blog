<?php include 'inc/adminheader.php';?>
<?php include 'inc/adminsidebar.php';?>
		
            <div class="box round first grid">
                <h2>Change Password</h2>
                <div class="block">
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
     $oldpass = mysqli_real_escape_string($db->link,$_POST['oldpass']);
     $newpass = mysqli_real_escape_string($db->link,$_POST['newpass']);
     if($oldpass=='' || $newpass==''){
         echo "<span class='error'>Fiiled Must Not be empty.</span>";
     }else{
              $chequery = "select * from foruser where password = '$oldpass'";
             $cresult = $db->select($chequery);
             if(!$cresult){
                       echo "<span class='error'>Password Not Matched</span>";
                }
                else{
                    while ($data = $cresult->fetch_assoc()) {
                       $id = $data['id'];
                    }
                    $query1= "update foruser set
                      password = '$newpass' where id = '$id'";
                     $result1 = $db->update($query1); 
                     if($result1){
                         echo "<span class='success'>Password Updated Successfully...</span>";
                     }else{
                        echo "<span class='error'>Password Not Updated Successfully...</span>";
                     }
                }
     }
    
 }    
?>               
                 <form method="post" action="">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Old Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter Old Password..."  name="oldpass" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>New Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter New Password..." name="newpass" class="medium" />
                            </td>
                        </tr>
						 
						
						 <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
 <?php include 'inc/adminfooter.php';?>