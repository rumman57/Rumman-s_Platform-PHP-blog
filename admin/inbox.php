<?php include 'inc/adminheader.php';?>
<?php include 'inc/adminsidebar.php';?>
	
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">         
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
<?php
    if(isset($_GET['seenmsg'])){
    	$seenmsg = $_GET['seenmsg'];
      $query= "update forcontact set
        status = '1'
       where id=$seenmsg";
        $updateresult = $db->update($query);
   }      

		        $query= "select * from forcontact where status = '0' order by id DESC";
		        $result = $db->select($query);
		        if($result){
		        	$i=0;
		            while ($value = $result->fetch_assoc()) {
                   $i++;
?> 
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $value['firstname']." ".$value['lastname'];?></td>
							<td><?php echo $value['email'];?></td>
							<td><?php echo $fm->textExerpt($value['body'],30);?></td>
							<td><?php echo $fm->DateFormat($value['date']);?></td>
							<td>
							<a href="viewsms.php?viewmsg=<?php echo $value['id'];?>">View</a>     ||
							<a href="replysms.php?replymsg=<?php echo $value['id'];?>">Reply</a>   || 
							<a href="?seenmsg=<?php echo $value['id'];?>">Mo. Draft</a></td>
						</tr>
				<?php } } ?>
					</tbody>
				</table>
               </div>
               </div>
                <div class="box round first grid">
                <h2>Draft Message</h2>
               <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Name</th>
							<th>Email</th>
							<th>Message</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
		<?php
		        $query= "select * from forcontact where status='1' order by id DESC";
		        $result = $db->select($query);
		        if($result){
		        	$i=0;
		            while ($value = $result->fetch_assoc()) {
                   $i++;
          ?> 
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $value['firstname']." ".$value['lastname'];?></td>
							<td><?php echo $value['email'];?></td>
							<td><?php echo $fm->textExerpt($value['body'],30);?></td>
							<td><?php echo $fm->DateFormat($value['date']);?></td>
							<td>
							<a href="viewsms.php?viewmsg=<?php echo $value['id'];?>">View</a> ||
							<a onclick = "return confirm('Are You Sure To Delete ?')" href="deletesms.php?delsmsid=<?php echo $value['id'];?>">Delete</a> 
							</td>
						</tr>
				<?php } } else{
					echo "NO Draft Availabe Now";
				}
                     
				?>
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