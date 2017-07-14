<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">

<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
        $title = mysqli_real_escape_string($db->link,$_POST['title']);
        $cat = mysqli_real_escape_string($db->link,$_POST['cat']); 
        //$image = mysqli_real_escape_string($db->link,$_FILES['image']); 
        $body = mysqli_real_escape_string($db->link,$_POST['body']); 
        $author = mysqli_real_escape_string($db->link,$_POST['author']);  
        $tags = mysqli_real_escape_string($db->link,$_POST['tags']);
        $userroleid = mysqli_real_escape_string($db->link,$_POST['userroleid']);

         $fileformat = array('jpg','jpeg','png','gif');
         $file_name = $_FILES['image']['name'];
         $file_size = $_FILES['image']['size'];
         $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.', $file_name);
        $file_extension = strtolower(end($div));
        $unique_name_image = substr(md5(time()),0,10).'.'.$file_extension;
        $uploaded_directory_Imagename = "images/".$unique_name_image;


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
                $query="INSERT INTO forpost (cat,title,body,image,author,tags,userroleid) VALUES ('$cat','$title','$body','$uploaded_directory_Imagename','$author','$tags','$userroleid')";
                $result = $db->insert($query);
                if($result){
                    echo "<span class ='success' >Post Inserted Successfully...</span>";
                }else{
                    echo "<span class ='error' >Post Not Inserted </span>";
                }
      }
  } 

  ?>              
                 <form action="addpost.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name ="title" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
                                <option>Select Category</option>
                <?php

              $query = "select * from  forcat";
              $result = $db->delete($query);
              if($result){
                 while ($value = $result->fetch_assoc()) {
                 
                ?>
                            <option value="<?php echo $value['id']?>"><?php echo $value['name']?></option>
                                  
                    <?php  }} ?>
                                </select>
                            </td>
                        </tr>
                   
                    
                        <!--<tr>
                            <td>
                                <label>Date Picker</label>
                            </td>
                            <td>
                                <input type="text" id="date-picker" name="date" />
                            </td>
                        </tr>-->
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="image"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
                            </td>
                        </tr>
						
                         <tr>
                            <td>
                                <label>Author Name</label>
                            </td>
                            <td>
                                <input type="text" name="author"/>
                                 <input type="hidden" name="userroleid" value="<?php echo Session::get('Userrole')?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Tags</label>
                            </td>
                            <td>
                                <input type="text" name="tags"/>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
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