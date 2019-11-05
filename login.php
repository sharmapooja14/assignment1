<!DOCTYPE html>
<html>
<head>
<title>Lgin Page</title>
<head>

<link rel="stylesheet" type="text/css" href="./assets/css/login.css" >
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>

<div class="container">
    <form method="post" action="loginchk.php">
        <div id="div_login">
        <img src="./assets/img/login.jpg" alt="login" style="width:30px;height:30px;">
            <h1>Login</h1>
       
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Login" name="but_submit" id="but_submit" />
                <button type="button" class="button" value="Input Button"><a href="insertuser.php">  Sign in </a></button>        
            </div>
            
        </div>
    </form>
    


</div>
</body>
</html> 
