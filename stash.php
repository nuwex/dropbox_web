<?php 
session_start();
if(!isset($_SESSION["session_username"])){
	header("location:index.php");
} else {

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mainstash.css"/>
</head>
    
<title>My Stash</title>
    
<div>
<body>
    <h1>Welcome, <?=$_SESSION['session_username'];?>! <a href="loggingout.php">Logout</a></h1>



<div class="logo">
</div>
    
<div class="tabs">
<div class="container">
<ul class="pull-left">

	<form action="uploadfiles.php" method="post" enctype="multipart/form-data">
			 Select File <input type="file" name="file">
			    <input type="submit" value="Upload">
        </form>
    
  <li><a href="#">New Folder</a></li>
  <li><a href="#">Rename</a></li>
</ul>
<ul class="pull-right">
  <li><a href="#">Delete File/Folder</a></li>
</ul>
</div>
</div>    
    
</body>
</div>
</html>

<?php

}
?>
