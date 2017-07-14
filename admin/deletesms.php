<?php
include '../lib/Session.php';
Session::SessionCheck();
?>

<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php' ;?>
<?php 
  $db = new Database();
?>
<?php
	  if(!isset($_GET['delsmsid']) && $_GET['delsmsid']==NULL){
	    header("Location:inbox.php");
	  }else{
	     $delsmsid = $_GET['delsmsid'];


	     $deletequery = "delete from forcontact where id = $delsmsid";
	     $deleteresult = $db->delete($deletequery);
	     if($deleteresult){
	     	 echo "<script>confirm('SMS Deleted Successfully...')</script>";
	     	 echo "<script>window.location='inbox.php'</script>";
	     	 //header("Location:inbox.php");
	     }else{
	     	echo "<script>alert('SMS Not Deleted')</script>";
	     	echo "<script>window.location='inbox.php'</script>";
	     	//header("Location:inbox.php");
	     }

	  }

?>
