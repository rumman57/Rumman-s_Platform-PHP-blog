<?php
include '../lib/Session.php';
Session::SessionCheck();
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php' ;?>
<?php include '../helpers/Format.php';?>
<?php 
  $db = new Database();
?>
<?php
	  if(!isset($_GET['delpost']) && $_GET['delpost']==NULL){
	    header("Location:postlist.php");
	  }else{
	     $delpost = $_GET['delpost'];

	     $query = "select * from forpost where id= $delpost";
	     $result = $db->select($query);
	     if($result){
	     	while ($value = $result->fetch_assoc()) {
	     		$getimage = $value['image'];
	     		unlink($getimage);
	     	}
	     }

	     $deletequery = "delete from forpost where id = $delpost";
	     $deleteresult = $db->delete($deletequery);
	     if($deleteresult){
	     	 echo "<script>confirm('Post Deleted Successfully...')</script>";
	     	 echo "<script>window.location='postlist.php'</script>";
	     	 //header("Location:postlist.php");
	     }else{
	     	echo "<script>alert('Post Not Deleted')</script>";
	     	//header("Location:postlist.php");
	     	echo "<script>window.location='postlist.php'</script>";
	     }

	  }

?>
