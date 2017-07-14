<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Add New Slider</h2>
                <div class="block">

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
        $uploaded_directory_Imagename = "images/slider/".$unique_name_image;


        if($title=="")
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
                $query="INSERT INTO forslider (title,image) VALUES ('$title','$uploaded_directory_Imagename')";
                $result = $db->insert($query);
                if($result){
                    echo "<span class ='success' >Image Uploaded Successfully...</span>";
                }else{
                    echo "<span class ='error' >Image Not Uploaded </span>";
                }
      }
  } 

  ?>              
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Slider Title</label>
                            </td>
                            <td>
                                <input type="text" name ="title" placeholder="Enter Slider Title" class="medium" />
                            </td>
                        </tr>
                                            
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="image"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Upload" />
                            </td>
                        </tr>
                    </table>
                    </form>
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