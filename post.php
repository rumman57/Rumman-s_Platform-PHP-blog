<?php include 'inc/header.php';?>
<?php 
 if(!isset($_GET['id']) || $_GET['id']==NULL)
 {
    header("Location: 404.php");
 }
 else
 {
 	$id = $_GET['id'];
    $query = "select * from forpost where id ='$id'";
    $post = $db->select($query);
 	while ($result=$post->fetch_assoc()) {
 		
?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2><?php echo $result['title'];?></h2>
				<h4><?php echo $fm->DateFormat($result['date']);?>,  By <a href="#"><?php echo $result['author'];?></a></h4>
			<img src="admin/<?php echo $result['image']?>" alt="post image"/>
			<p>
					<?php echo $result['body'];?>
			</p>

			<div id="disqus_thread"></div>
		<script>

		/**
		*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
		/*
		var disqus_config = function () {
		this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};
		*/
		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = '//rummansplatform.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
	 
                  <!-- Start Related Post Query-->
                  <h2>Related articles</h2>
	    
	    	<div class="relatedpost clear">
					
       <?php 
          $rcat = $result['cat'];
          $rquery = "select * from forpost where cat= $rcat AND id !=$id order by rand() limit 4";
          $rpost = $db->select($rquery);
          if($rpost)
          {
          	while($rresult = $rpost->fetch_assoc()){
	    ?>

					<a href="post.php?id=<?php echo $rresult['id'];?>">
					     <img src="admin/<?php echo $rresult['image']?>" alt="post image"/>
					</a>

					<?php } }
		 else
		 {
		 	echo "<h2 style=color:green;> No related post available</h2>";
		 }?>

		  <!-- End Related Post Query-->
				</div>
		 

		<?php }} ?>
	</div>

		</div>
		<?php include 'inc/sidebar.php';?>
	</div>

	<?php include 'inc/footer.php';?>