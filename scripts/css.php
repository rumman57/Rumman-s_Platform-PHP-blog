<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css">

<?php

   $selquery = "select * from fortheme where id = '1'";
      $chresult = $db->select($selquery);
      if($chresult){
           while ($radiovalue= $chresult->fetch_assoc()) {
         if($radiovalue['theme']=='default'){?>
            <link rel="stylesheet" href="theme/default.css"><?php }?>
         	<?php   if($radiovalue['theme']=='green') {?>
         	<link rel="stylesheet" href="theme/green.css"><?php }?>
         <?php if($radiovalue['theme']=='blue'){?>
       	<link rel="stylesheet" href="theme/blue.css"><?php }?>
 <?php }   }

?>
