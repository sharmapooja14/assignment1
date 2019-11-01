<?php
include('config.php');


if(!isset($_SESSION['txt_uname']))
{
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
            
    <title>Insert Record</title>
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
   <h1 class="text-white bg-dark text-center">All Records</h1>
    <br>
    <div class= "table-responsiv">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Profile Image</th>
                <th>Date Of Brith</th>
                <th>Document</th>
                <th>Address</th>
                <th>Country</th>
                <th>City</th>
                <th>Hobbies</th>
                <th>Delete Records</th>
                <th>Update Records</th>
            </thead>
            <?php
                
                if($con){
                    echo "";
                }
                else
                {
                    echo "";
                }
               // if(isset($_POST['submit']))

               if(isset($_POST['submit']))

                {
                    $username = $_POST['txt_uname'];
                    $lastname = $_POST['lastname'];

                    $optradio = $_POST['optradio'];
                    $image = $_FILES['image'];
                    $dob = $_POST['dob'];
                    $addresss = $_POST['address'];
                    $country = $_POST['country'];
                    $city = $_POST['any_name'];
                    $hobbies = implode(",",$_POST['chk']);
                    $myFile = $_FILES['myFile'];
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

                        $q="insert into registration_form(fname,lname,gender,pic,dob,resume,address,country,city,hobbies) values('$username','$lastname','$optradio','$imagename','$dob','$imagename','$addresss','$country','$city','$hobbies')";

                       // echo $q;
                         //  exit('est'); 
                         $query = mysqli_query($con,$q); 
                         if($query)
                         {
                           echo "record inserted";
                         }else{
                           // echo mysqli_error($con);
                         }
                        
                    } 

                 
                }

                    $displayquery = "SELECT * from `registration_form`" ;
                    $query = mysqli_query($con,$displayquery); 
                    
                    if(!$query){
                        printf("Error: %s\n", mysqli_error($con));
                        exit;
                    }else{
                        while ($rows =  mysqli_fetch_array($query)){
                    
                    
                        ?>
                        <tr>
                             <td><?php echo $rows['id']; ?></td>
                             <td><?php echo $rows['fname']; ?></td>
                             <td><?php echo $rows['lname']; ?></td>
                             <td><?php echo $rows['gender']; ?></td>
                             <td><img src="<?php echo $rows['pic']; ?>" height="200" width="200"/></td>
                             <td><?php echo $rows['dob']; ?></td>
                             <td><?php echo $rows['resume']; ?></td> 
                             <td><?php echo $rows['address']; ?></td>
                             <td><?php echo $rows['country']; ?></td>
                             <td><?php echo $rows['city']; ?></td>
                             <td><?php echo $rows['hobbies']; ?></td>
                             <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $rows['id']; ?>" class="text-white"> Delete </a>  </button> </td>
                             <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $rows['id'];?>" class="text-white"> Update </a> </button> </td>
                            
                        </tr>

                        <?php 
                        }
                    }
               
            
                
            ?>    
        </table>
    </div>
</div>
</body>
</html>