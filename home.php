 <?php 
session_start();
if(isset($_SESSION['txt_uname']))
{
  if((time() - $_SESSION['last_time']) > 300) // Time in Seconds so 5 minutes is = 300 seconds
  {
  header("location:logout.php");
  }
  else
  {
  $_SESSION['last_time'] = time();
  
  }
 }
 else
 {
  header('Location:login.php');
 }
?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<title>Home</title>
</head>
<body>
<div class="container">

  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="registration.php">Registration</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Uploadrecord.php">All Records</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
    </ul>
    <h1>welcome Dear <?php echo $_SESSION['txt_uname'] ?>!!! </h1>
</div>

</body>
</html> 