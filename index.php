
<!DOCTYPE html>
<html>
<head>
    
<link rel="stylesheet" type="text/css" href="main.css"/>
</head>
    
<title>Inventory Homepage</title>
    
<div>
<body oncontextmenu="return false">

<div class="logo">
</div>
      
<div class="nav"><h1><span>Login</span></h1>
</div>
 
<div class="login">  

<form action="" method="POST">
    <fieldset>
  Username:<br>
  <input type="text" name="username">
  <br>
  Password:<br>
  <input type="text" name="password">
        

<input class="register" type="submit" value="Login" name="submit" />


    </fieldset>
</form>

</div>
    
<div class="footer"> 
 <footer>
  <p>2015</p>
</footer>  
    </div>
    
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$con=mysql_connect('localhost','root','codebar') or die(mysql_error());
	mysql_select_db('Test') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
        
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($username == $dbusername && $password == $dbpassword)
	{
	session_start();
	$_SESSION['session_username']=$username;

	/* Redirect browser */
	header("Location: stash.php");
	}
	} else {
	echo "Invalid information given";
	}

} else {
	echo "Fill in all fields please";
}
}
?>    
</body>
</div>
</html>