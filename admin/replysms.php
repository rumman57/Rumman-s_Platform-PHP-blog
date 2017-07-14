<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
<?php
  if(!isset($_GET['replymsg']) && $_GET['replymsg']==NULL){
    header("Location:inbox.php");
  }else{
     $replymsg = $_GET['replymsg'];
  }

?>		
            <div class="box round first grid">
                <h2>Reply SMS </h2>
                <div class="block">

<?php 
   if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      $toemail = $fm->validation($_POST['toemail']);
      $fromemail = $fm->validation($_POST['fromemail']);
      $subject = $fm->validation($_POST['subject']);
      $message = $fm->validation($_POST['message']);
         
      $sendsms = mail($toemail, $subject, $message);
      if($sendsms){
        echo "<span class ='success' >Message Sent Successfully....</span>";
      }else{
        echo "<span class ='error' >Something Wrong Happen</span>";
      }
  } 

  ?>    
   <?php
            $query= "select * from forcontact where id=$replymsg";
            $result = $db->select($query);
            if($result){
             while ($value = $result->fetch_assoc()) {

 ?>           
                 <form action="" method="post" >
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>To</label>
                            </td>
                            <td>
                                <input type="text" name ="toemail" readonly  value="<?php echo $value['email'];?>" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>From</label>
                            </td>
                            <td>
                                <input type="text" name="fromemail" placeholder="Plese Enter Your Email"/>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label>Subject</label>
                            </td>
                            <td>
                               <input type="text" name="subject" placeholder="Name Your Subject...."/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Message</label>
                            </td>
                            <td>
                               <textarea class="tinymce" name="message"></textarea>
                            </td>
                        </tr>
                         <tr>
                          <td>
                                <label></label>
                            </td>
                            <td>
                                <input type="submit" name="submit" value="Send"/>
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