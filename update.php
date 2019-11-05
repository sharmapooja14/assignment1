<?php

 include 'config.php';
 
 if(!isset($_SESSION['txt_uname']))
 {
     header('location: login.php');
 }
 
 if(isset($_GET["id"])){
    $displayquery = "SELECT * from `registration_form`  where id='".$_GET["id"]."'";
    $query = mysqli_query($con,$displayquery); 
    
         $rows =  mysqli_fetch_array($query);


                    $username =  $rows['fname'];
                    $lastname =  $rows['lname'];
                    $gender = $rows['gender'];
                    $image = $rows['pic'];
                    $dob = $rows['dob'];
                   $resume = $rows['resume'];
                    $address = $rows['address'];
                    $hobbies = $rows['hobbies'];
                    $country = $rows["country"];
                    $city = $rows["city"];
 }

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
        
<title>update Page</title>
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
             <br><br><br>
            <h1 class="text-white bg-dark text-center">update Page</h1>
       
    <div calss="col-lg-8 m-auto d-block">
        <form method="post" action="" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="fristname"> First name: </label>
                    <input type="text" class="form-control" id="txt_uname" value="<?php if(isset($_GET["id"])){echo $username; } ?>" name="txt_uname" placeholder="Frist Name"  />
                </div>

            <div>
                <label for="lastname">Last name:</label>
                <input type="text" id="txt_uname" value="<?php if(isset($_GET["id"])){echo $lastname; } ?>" name="lastname" placeholder="Last Name" class="form-control"/>
                
            </div>

            <div class="form-check-inline">
                 <label class="form-check-label">Gender: </label><br>
                 <input type="radio"  name="optradio" checked="checked" <?php if(isset($_GET["show"])){if($gender=="Male"){ echo"checked='checked'";}}?> value="Male">Male
                 <input type="radio" name="optradio" <?php if(isset($_GET["show"])){if($gender=="Female"){ echo"checked='checked'";}}?> value="Female">Female
             </div>

            <div>
                <label for="file">Profile Image:  </label>
                <input type="file" value="<?php if(isset($_GET["id"])){echo $image; } ?>" name="image" class="form-control"><br><br>
            </div>

            <div>
                <label for="dob">date Of Birth: </label>
                <input type="date" class="form-control" id="" value="<?php if(isset($_GET["id"])){echo $dob; } ?>" name="dob" placeholder="DOB"/>
            </div>

            <div>
                <label for="file">Select a Document:  </label>
                <input type="file" value="<?php if(isset($_GET["id"])){echo $resume; } ?>" name="myFile" class="form-control"><br><br>
            </div>

            

            <div>
                <label for="address">Address:  </label>
                <textarea rows="4" cols="50" class="form-control" name="address"> <?php if(isset($_GET["id"])){echo $address; } ?>
               
                </textarea>
            </div>

            <div>
                <label for="country">Select Your Country</label>
                <select id="input" name="country" class="form-control" onchange="random_function()">
                    <option>Select Your Country</option>
                    <option selected="selected" <?php if(isset($_GET["id"])){if($country=="INDIA"){ echo"selected='selected'";}}?>  value="INDIA">INDIA</option>
                    <option selected="selected" <?php if(isset($_GET["id"])){if($country=="NORWAY"){ echo"selected='selected'";}}?>  value="INDIA">NORWAY</option>
                 </select>
                <div id="output">
            </div>

            <div class="form-check">
                <label class="form-check-label"> Hobbies </label><br>
                    
                    <input type="checkbox" class="form-check-input" selected="selected" <?php if(isset($_GET["id"])){if($hobbies=="Reading books"){ echo"selected='selected'";}}?> value="Reading books" name="chk[]" >Reading books <br>
                    <input type="checkbox" class="form-check-input" selected="selected" <?php if(isset($_GET["id"])){if($hobbies=="Cooking"){ echo"selected='selected'";}}?> value="Cooking" name="chk[]">Cooking<br>
                    <input type="checkbox" class="form-check-input" selected="selected" <?php if(isset($_GET["id"])){if($hobbies=="Driving"){ echo"selected='selected'";}}?> value="Driving" name="chk[]" >Driving<br>
              
            </div>
<br>
           <input type="submit" value="Submit" name="submit" class="btn btn-success" />
                                
            
            
        </form>     
            
    </div>
    
</div> 
<?php 
    if(isset($_POST['submit'])){

        $id = $_GET['id'];
       
                           $username = $_POST['txt_uname'];
                           $lastname = $_POST['lastname'];
                           $optradio = $_POST['optradio'];
                           $image = $_FILES['image'];
                           $dob = $_POST['dob'];
                           $myFile = $_FILES['myFile'];
                           $addresss = $_POST['address'];
                           $country = $_POST['country'];
                           $city = $_POST['any_name'];
                           $hobbies = implode(",",$_POST['chk']);
                           $imagename = $image['name'];
                           $imageerror = $image['error'];
                           $imagetemp = $image['tmp_name'];
       
                           $imageext = explode('.',$imagename);
                         $imagechk = strtolower(end($imageext));
       
                           $iamgeextstroed = array('png','jpg','jpeg'); 
                           
                           $imageconvertintostring = implode('/',$iamgeextstroed);
                           // echo $imageconvertintostring;
                          
                           if(in_array($imagechk,$iamgeextstroed)){
                               
       
                               $destinationimage ='uploadimage/' .$imagename;
                               move_uploaded_file($imagetemp,$destinationimage);
        $q = " update registration_form set id=$id, fname='$username', lname='$lastname', gender='$optradio', pic='$imagename', dob='$dob',
        resume='$imagename', address='$addresss', country='$country', city='$city', hobbies='$hobbies' where id=$id  ";
       
        $query = mysqli_query($con,$q);
       
        header('location:uploadrecord.php');
        }
    }
?>
</body>
</html>