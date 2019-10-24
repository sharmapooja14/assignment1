<?php 
session_start();
if(!isset($_SESSION['txt_uname']))
{
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Page Title</title>
</head>
<body>

<h1>welcome Dear <?php echo $_SESSION['txt_uname'] ?>!!! </h1>
<a href = "logout.php" class = "btn btn-danger" >Logout </a>

</body>
</html> 