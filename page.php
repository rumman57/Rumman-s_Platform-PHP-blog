<?php include 'inc/header.php';?>

<?php
  if(!isset($_GET['showpageid']) && $_GET['showpageid']==NULL){
    header("Location:index.php");
  }else{
     $pageid = $_GET['showpageid'];
  }

?>
<?php
        $getpagequery = "select * from forpage where id = $pageid";
        $getpageresult = $db->select($getpagequery);
        if($getpageresult){
            while ($getpagevalue = $getpageresult->fetch_assoc()) {

    ?>  
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2><?php echo $getpagevalue['title'];?></h2>

				<?php echo $getpagevalue['body'];?>
	</div>

		</div>
		<?php include 'inc/sidebar.php';?>
	</div>
  <?php  } }?>
	<?php include 'inc/footer.php';?>