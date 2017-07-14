<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Add New Page</h2>
                <div class="block">

<?php 

   if($_SERVER['REQUEST_METHOD'] == 'POST') {

         $title = $fm->validation($_POST['title']);
         $body = $fm->validation($_POST['body']);

        $title = mysqli_real_escape_string($db->link,$_POST['title']);
        $body = mysqli_real_escape_string($db->link,$_POST['body']); 


        if($title=="" || $body=="" ) {
            echo "<span class ='error' >Filled Should Not be Empty </span>";
        }else{
                $query="INSERT INTO forpage (title,body) VALUES ('$title','$body')";
                $result = $db->insert($query);
                if($result){
                    echo "<span class ='success' >Page Created Successfully...</span>";
                }else{
                    echo "<span class ='error' >Page Not Created</span>";
                }
       }
  } 

  ?>
                 
                 <form action="addpage.php" method="post">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name ="title"  class="medium" />
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
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Create" />
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