<!-- 
$database = new PDO('mysql:host=localhost;dbname=test',"root", "codebar");
$go = $database->prepare("insert into users (username, email, password) values (?,?,?)");
$username = $_POST['Username'];
$email = $_POST['Email'];
$password = $_POST['Password'];
-->



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mainreg.css"/>
    
    <script src="register.js"></script>
</head>
    
<title>Register here</title>
<embed src="bensound-thelounge.mp3" autostart="true" loop="true"
width="350" height="70">
</embed>  
<div>
<body oncontextmenu="return false">
<div class="logo">
</div>
      
<div class="nav">
<h1><span>Registration</span></h1>
</div>

<div class="login">

<form action="" method="post">
 <fieldset>
  Username:<br>
  <input type="text" name="username">
  <br>
  Password:<br>
  <input type="text" name="password"> 
  <br>
  <p class="submit"><input type="submit" value="Create Account" name="new" /></p>
      <a href="index.php" class="register">Cancel</a>
   </fieldset>
</form>
</div>

<div class="footer"> 
<footer>
         <p>2015</p>
</footer>  
</div>
<?php

if(isset($_POST["new"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$con=mysql_connect('localhost','root','codebar') or die(mysql_error());
	mysql_select_db('test') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM users WHERE username='".$username."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO users(username,password) VALUES('$username','$password')";
        
	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>       
</body> 
</div>
</html>