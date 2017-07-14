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
	  if(!isset($_GET['delpageid']) && $_GET['delpageid']==NULL){
	    header("Location:index.php");
	  }else{
	     $delpageid = $_GET['delpageid'];

	     $deletepagequery = "delete from forpage where id = $delpageid";
	     $deletepageresult = $db->delete($deletepagequery);
	     if($deletepageresult){
	     	 echo "<script>alert('Page Deleted Successfully...')</script>";
	     	// header("Location:index.php");
	     	 echo "<script>window.location='index.php'</script>";
	     }else{
	     	echo "<script>alert('Page Not Deleted')</script>";
	     	//header("Location:index.php");
	     	 echo "<script>window.location='index.php'</script>";
	     }

	  }

?>
