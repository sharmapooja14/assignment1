<?php
session_start();
if(!isset($_SESSION['txt_uname']))
{
    header('location: login.php');
}else{
?>
<!DOCTYPE html>
<html>
<head>
<script>
            function random_function()
            {
                var country=document.getElementById("input").value;
                if(country==="INDIA")
                {
                    var country_arr=["Delhi","Mumbai","Bangalore","Amritsar","Chandigarh","Hyderabad","Jaipur"," Patna","Kanpur","Jalandhar"];


                }
                else if(country==="NORWAY")
                {
                    var country_arr=["Oslo","Trondheim","Bergen","Tromsø","Skien","Hamar","Porsgrunn","Brevik","Moss"];
                }
               
                var string="";
               
                for(i=0;i<country_arr.length;i++)
                {

                    string=string+"<option value="+country_arr[i]+">"+country_arr[i]+"</option>";
                }
                string="<label for='city'>Select  Your City</label><select name='any_name'  class='form-control'>"+string+"</select>";
                document.getElementById("output").innerHTML=string;
            }
</script>
        
<title>Registration Page</title>
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
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="registration.php">Registration</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="uploadrecord.php">All Records</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
  </ul>
 

             <br><br><br>
            <h1 class="text-white bg-dark text-center">Registration Page</h1>
       
    <div calss="col-lg-8 m-auto d-block">
        <form method="post" action="uploadrecord.php" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="fristname"> First name: </label>
                    <input type="text" class="form-control" id="txt_uname" name="txt_uname" placeholder="Frist Name" />
                </div>

            <div>
                <label for="lastname">Last name:</label>
                <input type="text" id="txt_uname" name="lastname" placeholder="Last Name" class="form-control"/>
                
            </div>

            <div class="form-check-inline">
            
               
            <label class="form-check-label">Gender: </label><br>
                 <input type="radio"  name="optradio" value="male">Male
                 <input type="radio" name="optradio" value="female">Female
             </div>

            <div>
                <label for="file">Profile Image:  </label>
                <input type="file" name="image" class="form-control"><br><br>
            </div>

            <div>
                <label for="dob">date Of Birth: </label>
                <input type="date" class="form-control" id="" name="dob" placeholder="DOB"/>
            </div>

            <div>
                <label for="file">Select a Document:  </label>
                <input type="file" name="myFile" class="form-control"><br><br>
            </div>

            

            <div>
                <label for="address">Address:  </label>
                <textarea rows="4" cols="50" class="form-control" name="address">
               
                </textarea>
            </div>

            <div>
                <label for="country">Select Your Country</label>
                <select id="input" name="country" class="form-control" onchange="random_function()">
                    <option>Select Your Country</option>
                    <option>INDIA</option>
                    <option>NORWAY</option>
                 </select>
                <div id="output">
            </div>
            <div class="form-check">
                <label class="form-check-label"> Hobbies </label><br>
                    
                    <input type="checkbox" class="form-check-input" value="Reading books " name="chk[]">Reading books <br>
                    <input type="checkbox" class="form-check-input" value="Cooking" name="chk[]">Cooking<br>
                    <input type="checkbox" class="form-check-input" value="Driving" name="chk[]" >Driving<br>
              
            </div>

                <br>
            <input type="submit" value="Submit" name="submit" class="btn btn-success" />
                                
            
            
        </form>     
            
    </div>
    
</div>
<?php
}   