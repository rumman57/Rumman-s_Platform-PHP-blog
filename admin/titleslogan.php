<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Update Site Title and Description</h2>
                <div class="block sloginblock" >     
                 <div class="left_side">
<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
         $title = $fm->validation($_POST['title']);
         $slogan = $fm->validation($_POST['slogan']);
         $title = mysqli_real_escape_string($db->link,$_POST['title']);
         $slogan = mysqli_real_escape_string($db->link,$_POST['slogan']);


         $fileformat = array('png');
         $file_name = $_FILES['logo']['name'];
         $file_size = $_FILES['logo']['size'];
         $file_temp = $_FILES['logo']['tmp_name'];

        $div = explode('.', $file_name);
        $file_extension = strtolower(end($div));
        $unique_name_image = 'logo'.'.'.$file_extension;
        $uploaded_directory_Imagename = "images/".$unique_name_image;

      
        if($title=="" || $slogan=="")
        {
            echo "<span class ='error' >Filled Should Not be Empty </span>";
        } else{

      if(!empty($file_name)) {
        if($file_size>1048576){
            echo "<span class ='error' >File Size Not More Than 1MB </span>";
        }elseif(in_array($file_extension, $fileformat)===false){
            echo "<span class ='error' >You Can Upload Only : ".implode(' , ', $fileformat)."</span>";
        }else{

                move_uploaded_file($file_temp, $uploaded_directory_Imagename);
                $query="update forlogotitleslogan set
                   title    = '$title',
                   slogan   = '$slogan',
                   logo    = '$uploaded_directory_Imagename'
                   where id = 1 ";
                $updateresult = $db->update($query);
                if($updateresult){
                    echo "<span class ='success' >Data Updated Successfully...</span>";
                }else{
                    echo "<span class ='error' >Data Not Updated </span>";
                }
      }

     }else{
       
                 $query="update forlogotitleslogan set
                   title  = '$title',
                   slogan   = '$slogan'
                   where id = 1 ";
                $updateresult = $db->update($query);
                if($updateresult){
                    echo "<span class ='success' >Data Updated Successfully...</span>";
                }else{
                    echo "<span class ='error' >Data Not Updated </span>";
                }

    }
  }
 } 

?> 


<?php
        $query = "select * from forlogotitleslogan where id = 1";
        $result = $db->select($query);
        if($result){
            while ($value = $result->fetch_assoc()) {

?>          
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Website Title</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $value['title'];?>"  name="title" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>Website Slogan</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $value['slogan'];?>"  name="slogan" class="medium" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Website Logo</label>
                            </td>
                            <td>
                                <input type="file" name="logo" value=<?php echo $value['logo'];?>" class="medium" />
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
                <?php } }?>
                    </div>
                    <div class="right_side">
                   <img src="images/logo.png" height="150px" width="150px">
                </div>
                </div>

                
            </div>
<?php include 'inc/adminfooter.php';?>