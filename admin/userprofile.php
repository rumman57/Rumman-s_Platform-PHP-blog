<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; 
  $username = Session::get('username');
  $userId = Session::get('userId');
  $Userrole = Session::get('Userrole');
?>
		
            <div class="box round first grid">
                <h2>User Profile</h2>
                <div class="block">
<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
        $Username = mysqli_real_escape_string($db->link,$_POST['Username']);
        $password = mysqli_real_escape_string($db->link,$_POST['password']);  
        $name = mysqli_real_escape_string($db->link,$_POST['name']); 
        $email = mysqli_real_escape_string($db->link,$_POST['email']);  
        $details = mysqli_real_escape_string($db->link,$_POST['details']);

      
        if($Username=="" || $password=="" ||  $email=="")
        {
            echo "<span class ='error' >Username,Password & Email Should Not be Empty </span>";
        }else{
                $query="update foruser set
                   name      = '$name',
                   username  = '$Username',
                   password  = '$password',
                   email     = '$email',
                   details   = '$details'
                   where id = '$userId'";
                $updateresult = $db->update($query);
                if($updateresult){
                    echo "<span class ='success' >Data Updated Successfully...</span>";
                }else{
                    echo "<span class ='error' >Data Not Updated </span>";
                }
         }

    }
  ?> 
 <?php
   
   $showquery = "select * from foruser where id = '$userId' AND role= '$Userrole'";
   $showpostresult = $db->select($showquery);
   if($showpostresult) {
     while ($postvalue = $showpostresult->fetch_assoc()) {
          
  ?>               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">

                       <tr>
                            <td>
                                <label>Username</label>
                            </td>
                            <td>
                                <input type="text" name ="Username" value="<?php echo $postvalue['username'];?>"  />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" name ="password" value="<?php echo $postvalue['password'];?>" />
                            </td>
                        </tr>
                          <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                                <input type="text" name ="name" class="medium" value="<?php echo $postvalue['name'];?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" name ="email" class="medium" value="<?php echo $postvalue['email'];?>" />
                            </td>
                        </tr>                
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Details</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="details">
                                <?php echo $postvalue['details'];?>

                                </textarea>
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
                <?php  } } ?>
                </div>
            </div>
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>
    <!-- /TinyMCE -->

<?php include 'inc/adminfooter.php'; ?>