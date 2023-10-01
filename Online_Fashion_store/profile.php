<?php 
include('session.php');
if(!isset($_SESSION['username'])){
header("location: account.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>