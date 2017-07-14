
<div class="slidersection templete clear">
        <div id="slider">
        <?php

         $query = "select * from forslider order by id";
	     $post = $db->select($query);
	     if($post)
	     {
	     	while ($result = $post->fetch_assoc()) { ?>

            <a href="#"><img src="admin/<?php echo $result['image'];?>" alt="nature 1" title="<?php echo $result['title'];?>" /></a>
          
           <?php } } ?>
        </div>

</div>