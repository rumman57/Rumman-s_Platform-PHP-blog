<?php
  if(isset($_GET['showpageid'])){
    $pageid = $_GET['showpageid'];
    $titlepageid = "select * from forpage where id = $pageid";
    $titlepageresult = $db->select($titlepageid);
    if($titlepageresult){
        while ($titlepagevalue = $titlepageresult->fetch_assoc()) {
        	echo "<title>".$titlepagevalue['title']."-".TITLE."</title>";
     } }
   }elseif(isset($_GET['id'])){
    $pageid = $_GET['id'];
    $titlepageid = "select * from forpost where id = $pageid";
    $titlepageresult = $db->select($titlepageid);
    if($titlepageresult){
        while ($titlepagevalue = $titlepageresult->fetch_assoc()) {
        	echo "<title>".$titlepagevalue['title']."-".TITLE."</title>";
     } }   
   }else{
   	 echo "<title>".$fm->fortitle()."-".TITLE."</title>"; 
   }
?>

	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Delowar">