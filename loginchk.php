<?php 
include('config.php');
session_start();

if(isset($_POST['but_submit']))
{
    $username = $_POST['txt_uname'];
    $password = $_POST['txt_pwd'];
    $_SESSION['last_time'] = time();
   // $pass = md5($password);
   
    $sql = "select * from login where uname ='$username' and pass = '$password'";
    $query=mysqli_query($con,$sql);
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







