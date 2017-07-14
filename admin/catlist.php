<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>

            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
<?php
   if(isset($_GET['catdelete']) && $_GET['catdelete'] != NULL)
   {
   	  $catid = $_GET['catdelete'];
   	  $query = "delete from forcat where id = $catid";
   	  $catresult = $db->delete($query);
   	  if($catresult){
   	  	 echo "<script>alert('Category Deleted Successfully.......')</script>";
   	  	// header("Refresh:0");
   	  }else{
   	  	echo "<script>alert('Category Not Deleted ')</script>";
   	  }
   }
?>
<?php
		$query="select * from forcat order by id desc";
		$result = $db->select($query);
		if($result)
		{
			$i=0;
			while($value=$result->fetch_assoc())
			{
				$i++;
?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $value['name'];?></td>
							<td><a href="categoryedit.php?catedit=<?php echo $value['id'];?>">Edit</a> || <a onclick = "return confirm('Are You Sure To Delete ?')" href="?catdelete=<?php echo $value['id'];?>">Delete</a>
						</tr>
				<?php } }?>
					</tbody>
				</table>
               </div>
            </div>

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
</script>
<?php include 'inc/adminfooter.php';?>