	<div class="sidebar clear">
			<div class="samesidebar clear">
				<h2>Categories</h2>
					<ul>
				<?php

					 $query = "select * from forcat";
				     $post = $db->select($query);
				     if($post)
				     {
				     	while ($result = $post->fetch_assoc()) {
				     		
				?>
						<li><a href="catposts.php?cat=<?php echo $result['id']; ?>"><?php echo $result['name'];?></a></li>						
					
					<?php }} 
					else
					{
						echo"<li><a href=\"\">Uncategorized</a></li>";
					}?>
					</ul>
			</div>





	<div class="samesidebar clear">
				<h2>Latest articles</h2>
				<?php
     $query = "select * from forpost ORDER BY id DESC LIMIT 4 ";
     $post = $db->select($query);
     if($post)
     {
     	while ($result = $post->fetch_assoc()) {
     		
   ?>

					<div class="popular clear">
						<h3><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h3>
						<a href="post.php?id=<?php echo $result['id'];?>"><img src="admin/<?php echo $result['image']?>" alt="post image"/></a>
						<p><?php echo $fm->textExerpt($result['body'],125);?></p>	
					</div>
					
					<?php }}
			 else{
			 	header("Location: 404.php");  
			 } ?>  <!-- end if loop -->
					
			</div>
			
		</div>