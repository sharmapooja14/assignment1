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
    <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
       <button class="btn btn-secondary"> <a class="nav-link" href="registration.php" > Insert </a> </button> 
    </li>
    </ul>
    <div class="container">
        <br><br><br>
   <h1 class="text-white bg-dark text-center">All Records</h1>
    <br>
    <div class= "table-responsiv">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Profile Image</th>
                <th>Date Of Brith</th>
                <th>Document</th>
                <th>Address</th>
                <th>Country</th>
                <th>City</th>
                <th>Delete Records</th>
                <th>Update Records</th>
            </thead>
            <?php
                
                $cn = mysqli_connect("localhost","root" );
                if($cn){
                    echo "connection Successfull.";
                }
                else
                {
                    echo "error.";
                }
                mysqli_select_db($cn,'assignment');
     

             // if(isset($_POST['submit']))

               if(isset($_POST['submit']))

                {
                    $username = $_POST['txt_uname'];
                    $lastname = $_POST['lastname'];
                    $image = $_FILES['image'];
                    $dob = $_POST['dob'];
                    $myFile = $_FILES['myFile'];
                    $addresss = $_POST['address'];
                    $country = $_POST['country'];

                   // $country = $_POST['city'];
                   /* print_r($username);
                    echo "<br>";
                    print_r($lastname);
                    echo "<br>";
                    print_r($dob);
                    echo "<br>";
                    print_r($addresss);
                    echo "<br>";
                    print_r($myFile);
                    echo "<br>";
                    print_r($image);
                    echo "<br>";
                    print_r($country);
                    echo "<br>"; */
                  
                    

                   

                   // $city = $_POST['any_name'];

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

                    $q = "​INSERT INTO `registration_form`( `fname`, `lname`, `pic`, `dob`, `resume`, `address`, `country`,`city`)
                         VALUES ('".$username."','".$lastname."','".$destinationimage."','".$dob."','".$destinationimage."','".$addresss."','".$country."')";
                        
                         $query = mysqli_query($cn,$q); 
                         if($query)
                         {
                           echo "record inserted.";
                         }
                        
                    } 

                 
                }

                    $displayquery = "SELECT * from `registration_form`" ;
                    $query = mysqli_query($cn,$displayquery); 
                    
                    if(!$query){
                        printf("Error: %s\n", mysqli_error($cn));
                        exit;
                    }else{
                        while ($rows =  mysqli_fetch_array($query)){
                    
                    
                        ?>
                        <tr>
                             <td><?php echo $rows['id']; ?></td>
                             <td><?php echo $rows['fname']; ?></td>
                             <td><?php echo $rows['lname']; ?></td>
                             <td><img src="<?php echo $rows['pic']; ?>"/></td>
                             <td><?php echo $rows['dob']; ?></td>
                             <td><?php echo $rows['resume']; ?></td> 
                             <td><?php echo $rows['address']; ?></td>
                             <td><?php echo $rows['country']; ?></td>
                             <td><?php echo $rows['city']; ?></td>
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