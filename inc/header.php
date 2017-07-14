<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php' ;?>
<?php include 'helpers/Format.php';?>
<?php 
  $db = new Database();
  $fm = new Format();
  $start_from = null;
?>
<!DOCTYPE html>
<html>
<head>
 
	<?php include 'scripts/meta.php';?>
	<?php include 'scripts/css.php';?>
	<?php include 'scripts/js.php';?>

	
</head>

<body>
	<div class="headersection templete clear">
		<a href="#">
			<div class="logo">

		<?php
                $query = "select * from forlogotitleslogan where id =1";
                $result = $db->select($query);
                if($result){
                	while ($value= $result->fetch_assoc()) {
		?>
				<img src="admin/<?php echo $value['logo'];?>" alt="Logo"/>
				<h2><?php echo $value['title'];?></h2>
				<p><?php echo $value['slogan'];?></p>
				<?php  } } ;?>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
			
				<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
			
			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<div class="navsection templete">
	<ul>
	 <?php
      $path = $_SERVER['SCRIPT_NAME'];
	  $currenttitle = basename($path,'.php');
	 ?>
		<li><a  <?php if($currenttitle=='index')

		      echo "id=\"active\"";?> 

		href="index.php">Home</a></li>
 	<?php
        $getpagequery = "select * from forpage";
        $getpageresult = $db->select($getpagequery);
        if($getpageresult){
            while ($getpagevalue = $getpageresult->fetch_assoc()) {  ?>
          
               	<li><a 
               	<?php 
             if(isset($_GET['showpageid']) && $_GET['showpageid']==$getpagevalue['id']){
             	  echo "id=\"active\"";
				} ?>
    	href="page.php?showpageid=<?php echo $getpagevalue['id'];?>"><?php echo $getpagevalue['title'];?></a></li>	
    <?php } }?>
		<li><a
		  <?php if($currenttitle=='contact')

		      echo "id=\"active\"";?>  href="contact.php">Contact</a></li>
	</ul>
</div>