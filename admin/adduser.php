<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
        
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock">

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
           $username = $fm->validation($_POST['username']);
           $password = $fm->validation($_POST['password']);
           $email = $fm->validation($_POST['email']);
           $role = $fm->validation($_POST['role']);
           
        if($username=="" || $password=="" || $role=="" || $email=="")
        {
            echo "<span class ='error' >Filled Should Not be Empty </span>";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             echo "<span class ='error' >Invalid Email</span>";
       }
        else{
                 $checkemail="select * from foruser where email = '$email'";
                 $checkresult = $db->select($checkemail);
                 if($checkresult){
                    echo "<span class ='error' >Email Aready Exists...</span>";
                 }else{
                $query="INSERT INTO foruser (username,password,email,role) VALUES ('$username','$password','$email','$role')";
                $result = $db->insert($query);
                if($result){
                    echo "<span class ='success' >User Inserted Successfully...</span>";
                }else{
                    echo "<span class ='error' >User Not Inserted </span>";
                }
          }
      
      }
  }

?>
                 <form action="" method = "post">
                    <table class="form">                    
                        <tr>
                            <td>
                                <label>Username</label>
                            </td>
                            <td>
                                <input type="text" name ="username" placeholder="Enter Username"  />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" name ="password" placeholder="Enter Password" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                                <input type="text" name ="email" placeholder="Enter Your Email" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Role</label>
                            </td>
                            <td>
                                <select id="select" name="role">
                                   <option>Select a role Of the User</option>
                                   <option value="0">Admin</option>
                                   <option value="1">Author</option>
                                   <option value="2">Editor</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <input type="submit" value="Create" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
<?php include 'inc/adminfooter.php'; ?>   
        













































<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Add New User</h2>
                <div class="block">

<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
        $title = mysqli_real_escape_string($db->link,$_POST['title']);
        $cat = mysqli_real_escape_string($db->link,$_POST['cat']); 
     


        if($title=="" || $cat=="" || $body=="" || $author==""  || $tags=="")
        {
            echo "<span class ='error' >Filled Should Not be Empty </span>";
        }else if(empty($file_name)){
        echo "<span class ='error' >Filled Should Not be Empty </span>";
        }elseif($file_size>1048576){
            echo "<span class ='error' >File Size Not More Than 1MB </span>";
        }elseif(in_array($file_extension, $fileformat)===false){
            echo "<span class ='error' >You Can Upload Only : ".implode(' , ', $fileformat)."</span>";
        }else{

                move_uploaded_file($file_temp, $uploaded_directory_Imagename);
                $query="INSERT INTO forpost (cat,title,body,image,author,tags) VALUES ('$cat','$title','$body','$uploaded_directory_Imagename','$author','$tags')";
                $result = $db->insert($query);
                if($result){
                    echo "<span class ='success' >Post Inserted Successfully...</span>";
                }else{
                    echo "<span class ='error' >Post Not Inserted </span>";
                }
      }
  } 

  ?>              
                 <form action="" method="post" enctype="">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Username</label>
                            </td>
                            <td>
                                <input type="text" name ="username" placeholder="Enter Username"  />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Password</label>
                            </td>
                            <td>
                                <input type="password" name ="password" placeholder="Enter Password" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Role</label>
                            </td>
                            <td>
                                <select id="select" name="role">
                                   <option>Select a role Of the User</option>
                                   <option value="0">Admin</option>
                                   <option value="1">Author</option>
                                   <option value="2">Editor</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <input type="submit" value="Create" />
                            </td>
                        </tr>
                     
                    </table>
                    </form>
                </div>
            </div>

<?php include 'inc/adminfooter.php'; ?>