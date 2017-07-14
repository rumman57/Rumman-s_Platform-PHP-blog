<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Edit Slider</h2>
                <div class="block">
<?php
  if(!isset($_GET['editslider']) && $_GET['editslider']==NULL){
    header("Location:sliderlist.php");
  }else{
     $editslider = $_GET['editslider'];
  }

?>
<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
        $title = mysqli_real_escape_string($db->link,$_POST['title']);
  
         $fileformat = array('jpg','jpeg','png');
         $file_name = $_FILES['image']['name'];
         $file_size = $_FILES['image']['size'];
         $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_extension = strtolower(end($div));
        $unique_name_image = substr(md5(time()),0,10).'.'.$file_extension;
        $uploaded_directory_Imagename = "images/slider".$unique_name_image;

      
        if($title=="")
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
                $query="update forslider set
                   title  = '$title',
                   image  = '$uploaded_directory_Imagename'
                   where id = $editslider";
                $updateresult = $db->update($query);
                if($updateresult){
                    echo "<span class ='success' >Slider Updated Successfully...</span>";
                }else{
                    echo "<span class ='error' >Slider Not Updated </span>";
                }
      }

     }else{
       
              $query="update forslider set               
                   title  = '$title'
                   where id = $editslider";
                $updateresult = $db->update($query);
                if($updateresult){
                    echo "<span class ='success' >Slider Updated Successfully...</span>";
                }else{
                    echo "<span class ='error' >Slider Not Updated </span>";
                }

    }
  }
 } 

  ?> 
 <?php
   
   $showquery = "select * from forslider where id = '$editslider'";
   $showpostresult = $db->select($showquery);
   if($showpostresult) {
     while ($postvalue = $showpostresult->fetch_assoc()) {
          
  ?>               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name ="title" value="<?php echo $postvalue['title']; ?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <label>Upload Image</label>
                            </td>
                            <td>
                              <img src="<?php echo $postvalue['image'];?>" height="120px" width="190px" /><br>
                                <input type="file" name="image"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Edit" />
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