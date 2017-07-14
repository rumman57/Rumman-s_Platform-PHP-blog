<?php include 'inc/header.php';?>
<!-- Pagination-->
<?php 
    $post_per_page = 1;
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	}
	else{
		$page = 1;
	}
	$start_from = ($page-1) * $post_per_page;
?>
<!-- Pagination-->

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">

   <?php
    if(!isset($_GET['search']) || $_GET['search']==NULL)
 {
    header("Location: 404.php");
 }
else
 {
 	$search = $_GET['search'];
    $query = "select * from forpost where title LIKE '%$search%' OR body LIKE '%$search%'" ;
    $post = $db->select($query);
    if($post)
    {
    	while ($result=$post->fetch_assoc()) {
 		
       ?>
    
 	

  			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h2>
				<h4><?php echo $fm->DateFormat($result['date']);?>,  By <a href="#"><?php echo $result['author'];?></a></h4>
				 <a href="post.php?id=<?php echo $result['id'];?>"><img src="admin/<?php echo $result['image']?>" alt="post image"/></a>
				<p>
					<?php echo $fm->textExerpt($result['body']);?>
				</p>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $result['id']?>">Read More</a>
				</div>
			</div>

<?php  } ?>  <!-- end while loop -->
<!-- Pagination -->
<?php 
$query1 = "select * from forpost where title LIKE '%$search%' OR body LIKE '%$search%'";
$result = $db->select($query1);
$total_rows = mysqli_num_rows($result);
$total_pages = ceil($total_rows/$post_per_page);
echo "<span class='Pagination'><a href=\"index.php?page=1\">First Page </a>";
for ($i=2;$i<$total_pages; $i++) { 
	echo "<a href=\"index.php?page=$i\">$i </a>";
}
echo "<span class='Pagination'><a href=\"index.php?page=$total_pages\">Last Page</a>";
?>

<!-- Pagination -->


<?php }

else
{
	 echo "No Search Result Found";
}

} ?> 




		</div>
			
		<?php include 'inc/sidebar.php' ; ?>
	</div>
	<?php include 'inc/footer.php'; ?>