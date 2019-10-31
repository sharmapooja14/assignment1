<!DOCTYPE html>
<html>
<head>
<title>Lgin Page</title>
<head>

<link rel="stylesheet" type="text/css" href="./assets/css/login.css" >
</head>
<body>

<div class="container">
    <form>
        <div id="div_login">
        <img src="./assets/img/login.jpg" alt="login" style="width:30px;height:30px;">
            <h1>Sign In</h1>
       
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Sign in" name="sbt" id="" />             
            </div>
            
        </div>
    </form>
    
    <?php 

if(isset($_GET["sbt"]))
{
    include('config.php');

$q="insert into login(uname,pass) values('".$_GET["txt_uname"]."','".$_GET["txt_pwd"]."')";

$i=mysqli_query($con,$q);
if($i>0)
{
	echo"Record Inserted";
	
}
else
{
	echo"Error in Insert";
}
}
?>

</div>
</body>
</html> 
