<?php include 'inc/header.php';?>
<!-- Pagination-->
<?php 
    $post_per_page = 2;
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
    if(!isset($_GET['cat']) || $_GET['cat']==NULL)
 {
    header("Location: 404.php");
 }
 else
 {
 	
 	$id1 = $_GET['cat'];
    $categoryquery = "select * from forpost where cat =$id1";
    $post = $db->select($categoryquery);
    if($post){ 
 	while ($result4=$post->fetch_assoc()) {
 		
?>

  			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $result4['id'];?>"><?php echo $result4['title'];?></a></h2>
				<h4><?php echo $fm->DateFormat($result4['date']);?>,  By <a href="#"><?php echo $result4['author'];?></a></h4>
				 <a href="post.php?id=<?php echo $result4['id'];?>"><img src="admin/<?php echo $result4['image']?>" alt="post image"/></a>
				<p>
					<?php echo $fm->textExerpt($result4['body']);?>
				</p>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $result4['id']?>">Read More</a>
				</div>
			</div>

<?php  }  ?>  <!-- end while loop -->
<!-- Pagination -->
<?php 
$query = "select * from forpost where cat =$id1";
$result2 = $db->select($query);
$total_rows = mysqli_num_rows($result2);
$total_pages = ceil($total_rows/$post_per_page);
echo "<span class='Pagination'><a href=\"index.php?page=1\">First Page </a>";
for ($i=2;$i<$total_pages; $i++) { 
	echo "<a href=\"index.php?page=$i\">$i </a>";
}
echo "<span class='Pagination'><a href=\"index.php?page=$total_pages\">Last Page</a>";
?>

<!-- Pagination -->


<?php }else{
    echo "NO post availabe for this category.......";
	}}?>
  
 <!-- end if loop -->
		</div>
			
		<?php include 'inc/sidebar.php' ; ?>
	</div>
	<?php include 'inc/footer.php'; ?>