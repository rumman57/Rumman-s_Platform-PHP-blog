<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock">

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $name = $_POST['name'];
        if(empty($name))
        {
            echo "<span class='error'>Field Should Not be Empty</span>";
        }else{
            $query = "insert into forcat (name) values ('$name')";
            $result = $db->insert($query);
            if($result)
            {
                echo "<span class='success'>Category Inserted Successfully...</span>";
            }
            else{
                echo "<span class='error'>Category Not Inserted </span>";
            }
        }
      }

?>
                 <form action="addcat.php" method = "post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input type="text" name = "name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
<?php include 'inc/adminfooter.php';?>