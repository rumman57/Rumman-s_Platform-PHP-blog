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
	  if(!isset($_GET['delslider']) && $_GET['delslider']==NULL){
	    header("Location:sliderlist.php");
	  }else{
	     $delslider = $_GET['delslider'];

	     $query = "select * from forslider where id= $delslider";
	     $result = $db->select($query);
	     if($result){
	     	while ($value = $result->fetch_assoc()) {
	     		$getimage = $value['image'];
	     		unlink($getimage);
	     	}
	     }

	     $deletequery = "delete from forslider where id = $delslider";
	     $deleteresult = $db->delete($deletequery);
	     if($deleteresult){
	     	 echo "<script>confirm('Slider Deleted Successfully...')</script>";
	     	 echo "<script>window.location='sliderlist.php'</script>";
	     	// header("Location:sliderlist.php");
	     }else{
	     	echo "<script>alert('Slider Not Deleted')</script>";
	     	 echo "<script>window.location='sliderlist.php'</script>";
	     	//header("Location:sliderlist.php");
	     }

	  }

?>
