<?php
include '../lib/Session.php';
Session::init();
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php' ;?>
<?php include '../helpers/Format.php';?>
<?php 
  $db = new Database();
  $fm = new Format();
  $start_from = null;
?>
<!DOCTYPE html>
<head>
<style>
.success{
  color:green;
  font-size: 18px;
}
.error{
  color: crimson;
  font-size:18px;
}  
  
</style>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
<?php
  
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
  	$email = $fm->validation($_POST['email']);
  //	$email = mysqli_real_escape_string($db->link,$email);

     if($email=="")
        {
            echo "<span class ='error' >Email Must Not Be Empty..</span>";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             echo "<span class ='error' >Invalid Email</span>";
        }else{
                 $checkemail="select * from foruser where email = '$email'";
                 $checkresult = $db->select($checkemail);
                 if(!$checkresult){
                    echo "<span class ='error' >Email Does Not Matched..</span>";
                 }else{

                    while ($result=$checkresult->fetch_assoc()) {
                        $userid = $result['id'];
                        $username = $result['username'];
                      }
                        $password = substr($email,0,5);
                        $password .= rand(32434,45434);
                        $query= "update foruser set
                          password = '$password'
                          where id = '$userid'";
                        $update_row = $db->update($query);
                        if($update_row){
                         $to      = '$email';
                         $headers = 'rumman142228@gmail.com';
                         $subject = "Your Password Information..";
                         $message = "Your Username is : ".$username."\n"." Your New Password is : ".           $password."Visit Website Again To Log in";

                           $sendsms = mail($to, $subject, $message);
                           if($sendsms){
                                echo "<span class ='success' >We send your password to your email.Visit Your Email...</span>";
                           }else{
                                echo "<span class ='error' >Password Not sent by Email..</span>";
                           }

                        }else{
                            echo "<span class ='error' >Something went wrong...</span>";
                        }
                    
                 }

        } 

    }
  

?>


		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Your Email" " name="email"/>
			</div>
			<div>
				<input type="submit" value="Recover" />
			</div>
		</form><!-- form -->
      <div class="button">
      <a href="login.php">Login Now</a>
    </div><!-- button -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>