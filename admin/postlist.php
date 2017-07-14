<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>

            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
						    <th width="5%"> No.</th>
							<th width="15%">Post Title</th>
							<th width="20%">Description</th>
							<th width="10%">Category</th>
							<th width="10%">Image</th>
							<th width="10%">Author</th>
							<th width="10%">Tags</th>
							<th width="10%">Date</th>
							<th width="10%">Action</th>
						</tr>
					</thead>
					<tbody>
		<?php
      $query = "select forpost.*,forcat.name from forpost inner join forcat ON forpost.cat = forcat.id order by forpost.id DESC";
           $post = $db->select($query);
           if($post){
           	$i =0;
           	 while ($result = $post->fetch_assoc()) {
           	 	$i++;
		?>
					<tr class="odd gradeX">
						<td><?php echo $i;?></td>
						<td><?php echo $result['title'];?></td>
						<td><?php echo $fm->textExerpt($result['body'],75);?></td>
						<td><?php echo $result['name'];?></td>
						<td><img src="<?php echo $result['image'];?>" height="50px width=50px"</td>
						<td><?php echo $result['author'];?></td>
						<td><?php echo $result['tags'];?></td>
						<td><?php echo $fm->DateFormat($result['date']);?></td>
						<td>

						<a href="viewpost.php?viewpostid=<?php echo $result['id'];?>">View</a>

						 <?php if(Session::get('Userrole')=='0' || Session::get('Userrole')== $result['userroleid']) { ?>
						|| <a href="editpost.php?editp=<?php echo $result['id'];?>">Edit</a> 
						|| 
						<a onclick = "return confirm('Are You Sure To Delete ?')" href="deletepost.php?delpost=<?php echo $result['id'];?>">Delete</a>
                        <?php } ?>


						</td>
					</tr>
				<?php } } ?>
					</tbody>
				</table>
	
               </div>
            </div>
<?php include 'inc/adminfooter.php'; ?>