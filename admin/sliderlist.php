<?php include 'inc/adminheader.php'; ?>
<?php include 'inc/adminsidebar.php'; ?>

            <div class="box round first grid">
                <h2>Sleder List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
						    <th> No.</th>
							<th>Slider Title</th>
							
							<th>Image</th>
						
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
		<?php

           $query = "select * from forslider";
           $post = $db->select($query);
           if($post){
           	$i =0;
           	 while ($result = $post->fetch_assoc()) {
           	 	$i++;
		?>
					<tr class="odd gradeX">
						<td><?php echo $i;?></td>
						<td><?php echo $result['title'];?></td>
						<td><img src="<?php echo $result['image'];?>" height="50px" width="50px"</td>
						<td>
						 <?php if(Session::get('Userrole')=='0') { ?>
					     <a href="editslider.php?editslider=<?php echo $result['id'];?>">Edit</a> 
						|| 
						<a onclick = "return confirm('Are You Sure To Delete ?')" href="deleteslider.php?delslider=<?php echo $result['id'];?>">Delete</a>
                        <?php } ?>
						</td>
					</tr>
				<?php } } ?>
					</tbody>
				</table>
	
               </div>
            </div>
<?php include 'inc/adminfooter.php'; ?>
