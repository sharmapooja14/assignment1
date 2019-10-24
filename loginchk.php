<?php 
  
session_start();
$cn=mysqli_connect("localhost","root" );
if($cn){
    echo "connection Successfull.";
}
else
{
    echo "Oops! Something went wrong. Please try again later.";
}
$db = mysqli_select_db($cn,'assignment');
if(isset($_POST['but_submit']))
{
    $username = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    $sql = "select * from login where uname ='$username' and pass = '$password'";
    $query=mysqli_query($cn,$sql);
    $row = mysqli_num_rows($query);{
        if($row == 1){
            echo "Login Successfull";
            $_SESSION['txt_uname'] = $username;
            header('location: home.php');
        }
        else
        {
             header('location: login.php');
            echo "Login failed";
        }
    }

}
?>







