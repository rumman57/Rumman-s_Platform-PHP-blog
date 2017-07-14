<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Theme</h2>
               <div class="block copyblock">

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $theme = $_POST['theme'];
            $query = "update fortheme set
                      theme = '$theme'";
            $result = $db->update($query);
            if($result)
            {
                echo "<span class='success'>Theme Updated Successfully...</span>";
            }
            else{
                echo "<span class='error'>Theme Not Updated </span>";
          }
       }
?>
 <?php

      $selquery = "select * from fortheme where id = '1'";
      $chresult = $db->select($selquery);
      if($chresult){
           while ($radiovalue= $chresult->fetch_assoc()) {
    
 ?>
                 <form action="" method = "post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input 
                         <?php if($radiovalue['theme']=='default')
                                 echo "checked" ;?>
                                type="radio" name = "theme"  value = "default"/> Default
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input 
                                <?php if($radiovalue['theme']=='green')
                                 echo "checked" ;?>
                                 type="radio" name = "theme"  value = "green"/> Green
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <input type="radio" 
                             <?php if($radiovalue['theme']=='blue')
                                 echo "checked" ;?>

                                name = "theme"  value = "blue"/> Blue
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                <?php } }?>
                </div>
            </div>
<?php include 'inc/adminfooter.php'; ?>   
        