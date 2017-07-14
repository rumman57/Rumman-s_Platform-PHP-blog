<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php';
  $username = Session::get('username');
  $userId = Session::get('userId');
  $Userrole = Session::get('Userrole');

 ?>

            <div class="box round first grid">
                <h2>User List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>UserName</th>
							<th>Name</th>
							<th>Email</th>
							<th>Details</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
 <?php
   if(isset($_GET['userdelete'])){
   	 $getuserid = $_GET['userdelete'];
   	  $query = "delete from foruser where id ='$getuserid'";
   	  $catresult = $db->delete($query);
   	  if($catresult){
   	  	 echo "<script>alert('User Deleted Successfully.......')</script>";
   	  }else{
   	  	echo "<script>alert('User Not Deleted ')</script>";
   	  }
   }
 ?>
<?php
		$query="select * from foruser";
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
							<td><?php echo $value['username'];?></td>
							<td><?php echo $value['name'];?></td>
							<td><?php echo $value['email'];?></td>
							<td><?php echo $fm->textExerpt($value['details'],30);?></td>
							<td><?php 
                               if($value['role']==0)
                               	echo "Admin";
                               elseif($value['role']==1)
                               	echo "Author";
                                elseif($value['role']==2)
                               echo "Editor";

							?></td>
                            <td>
							<?php  if( Session::get('Userrole') =='0'){ ?>
							<a onclick = "return confirm('Are You Sure To Delete ?')" href="?userdelete=<?php echo $value['id'];?>">Delete</a>
							<?php } ?>
							</td>
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
<?php include 'inc/adminfooter.php'; ?>