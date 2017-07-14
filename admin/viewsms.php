<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
<?php
  if(!isset($_GET['viewmsg']) && $_GET['viewmsg']==NULL){
    header("Location:inbox.php");
  }else{
     $viewmsg = $_GET['viewmsg'];
  }

?>		
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">

<?php
      $query= "update forcontact set
        notification = '1'
       where id=$viewmsg";
        $updateresult = $db->update($query);
       
?>
<?php 
   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      
  } 

  ?>    
   <?php
            $query= "select * from forcontact where id=$viewmsg";
            $result = $db->select($query);
            if($result){
             while ($value = $result->fetch_assoc()) {

 ?>           
                 <form action="" method="post" >
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Name</label>
                            </td>
                            <td>
                             <h4><?php echo $value['firstname']." ".$value['lastname'];?></h4>
                                <!--<input type="text" name ="title" placeholder="Enter Post Title..." class="medium" />-->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Email</label>
                            </td>
                            <td>
                              <h4><?php echo $value['email'];?></h4>
                                <!--<input type="file" name="image"/>-->
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Date</label>
                            </td>
                            <td>
                             <p><?php echo $fm->DateFormat($value['date']);?></p>
                                <!--<input type="file" name="image"/>-->
                            </td>
                        </tr>
                        <tr style="margin-right:20px;">
                            <td width:20%;>
                                <label>Message</label>
                            </td>
                            <td style="text-align:justify;width:80%;">
                             <pre><?php echo $value['body'];?></pre>
                                <!--<textarea class="tinymce" name="body"></textarea>-->
                            </td>
                        </tr>
                    </table>
                    </form>
                    <?php } } ?>
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