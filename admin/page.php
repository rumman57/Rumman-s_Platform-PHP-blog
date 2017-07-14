<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Edit Page</h2>
                <div class="block">
<?php
  if(!isset($_GET['pageid']) && $_GET['pageid']==NULL){
    header("Location:index.php");
  }else{
     $pageid = $_GET['pageid'];
  }

?>

<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST') {

         $title = $fm->validation($_POST['title']);
         $body = $fm->validation($_POST['body']);

        $title = mysqli_real_escape_string($db->link,$_POST['title']);
        $body = mysqli_real_escape_string($db->link,$_POST['body']); 


        if($title=="" || $body=="" ) {
            echo "<span class ='error' >Filled Should Not be Empty </span>";
        }else{
                $query="update forpage  set
                title = '$title',
                body ='$body'
                where id = $pageid";
                $result = $db->update($query);
                if($result){
                    echo "<span class ='success' >Page Update Successfully...</span>";
                }else{
                    echo "<span class ='error' >Page Not Update</span>";
                }
       }
  } 

  ?>
  <?php
        $getpagequery = "select * from forpage where id = $pageid";
        $getpageresult = $db->select($getpagequery);
        if($getpageresult){
            while ($getpagevalue = $getpageresult->fetch_assoc()) {

    ?>  
                 
                 <form action="" method="post">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name ="title" value="<?php echo $getpagevalue['title'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body">
                                    
                                    <?php echo $getpagevalue['body'];?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="update" Value="Update" />
                                <a onclick = "return confirm('Are You Sure To Delete ?')" href="pagedelete.php?delpageid=<?php echo $getpagevalue['id'];?>">
                                   <!--<input  name="submit" Value="Delete"/> This not work-->
                                   <span class ="pagedeleoption">Delete</span></a>
                            </td>
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php }  }?>
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