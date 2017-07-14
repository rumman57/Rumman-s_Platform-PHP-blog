<?php include 'inc/header.php';?>
<?php
$error="";
$msg="";

?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
				<h2>Contact us</h2>


<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
	  	$firstname = $fm->validation($_POST['firstname']);
	  	$lastname= $fm->validation($_POST['lastname']);
	  	$email= $fm->validation($_POST['email']);
	  	$body= $fm->validation($_POST['body']);
	  	
	  	$firstname = mysqli_real_escape_string($db->link,$firstname);
	  	$lastname = mysqli_real_escape_string($db->link,$lastname);
	  	$email = mysqli_real_escape_string($db->link,$email);
	  	$body = mysqli_real_escape_string($db->link,$body);
	 
	  if(empty($firstname)){
	  	 $error = "First Name Must Not Be Empty..";
	  } elseif(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
	  	 $error = "Only letters and white space allowed";
	  }elseif(empty($lastname)){
	  	 $error = "Last Name Must Not Be Empty..";
	  }elseif(!preg_match("/^[a-zA-Z ]*$/",$lastname)){
	  	 $error = "Only letters and white space allowed";
	  } elseif(empty($email)){
	  	 $error = "Email Must Not Be Empty..";
	  }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	  	 $error = "Invalid Email Format..";
	  } elseif(empty($body)){
	  	 $error = "Messege Must Not Be Empty..";
	  }else{	  	
        $query="insert into forcontact (firstname,lastname,email,body) values ('$firstname','$lastname','$email','$body')";
                $result = $db->insert($query);
                if(!$result){
                     $error = "There Should be error something";
                }else{
                  $msg = "Sent Email Successfully.....";
                }

	  }
  }


?>

    <?php

          if(!empty($error)){
          	 echo "<span style='color:crimson;font-size:18px;'>$error</span>";
          	 echo "<br>";
          }else{
          	echo "<span style='color:green;font-size:18px;'>$msg</span>";
          	 echo "<br>";
          }

    ?>
			<form action="" method="post">
				<table>
				<tr>
					<td>Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name" />
					</td>
				</tr>
				<tr>
					<td>Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name" />
					</td>
				</tr>
				
				<tr>
					<td>Your Email Address:</td>
					<td>
					<input type="text" name="email" placeholder="Enter Email Address" />
					</td>
				</tr>
				<tr>
					<td>Your Message:</td>
					<td>
					<textarea name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Submit"/>
					</td>
				</tr>
		</table>
	<form>				
 </div>

		</div>
		<?php include 'inc/sidebar.php';?>
	</div>

	<?php include 'inc/footer.php';?>