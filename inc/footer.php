<div class="footersection templete clear">
	  <div class="footermenu clear">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Privacy</a></li>
		</ul>
	  </div>
	   <?php
                $crquery = "select * from forfooter where id =1";
                $crresult = $db->select($crquery);
                if($crresult){
                	while ($crvalue = $crresult->fetch_assoc()) {
		   ?>
	  <p>&copy; <?php echo $crvalue['copyright'];?></p>
	  <?php } }?>
	</div>
	<div class="fixedicon clear">
 <?php
                $socialquery = "select * from forsocialmedia where id =1";
                $socialresult = $db->select($socialquery);
                if($socialresult){
                	while ($socialvalue = $socialresult->fetch_assoc()) {
		   ?>
		<a href="<?php echo $socialvalue['fb'];?>"><img src="images/fb.png" alt="Facebook"/></a>
		<a href="<?php echo $socialvalue['tw'];?>"><img src="images/tw.png" alt="Twitter"/></a>
		<a href="<?php echo $socialvalue['ln'];?>"><img src="images/in.png" alt="LinkedIn"/></a>
		<a href="<?php echo $socialvalue['gplus'];?>"><img src="images/gl.png" alt="GooglePlus"/></a>
		<?php } }?>
	</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>
</html>