<?php
$reuuest_method = $_SERVER['REQUEST_METHOD'];
$response = array("data"=> "");
switch($reuuest_method){
    case "GET":
    response(doGet());
    break;
    case "POST":
       doPost();
    break;
    case "PUT":
       doPut();
    break;
    case "DELETE":
       doDelete();
    break;
}

Function doGet(){
    include('config.php');
    $displayquery = "SELECT * from `login`" ;
    $query = mysqli_query($con,$displayquery); 
   while( $data =  mysqli_fetch_assoc($query)){
    $response[] = array("id"=>$data['id'],"uname"=>$data['uname'],"pass"=>$data['pass']);
   }
  return $response;
 // echo json_encode($data);
}

Function doPost(){
    echo "Post method called";
}

Function doPut(){
    echo "Put method called";
}

Function doDelete(){
    echo "Delete method called";
}

//output
Function response($response){
    echo json_encode(array("status"=>"200","data"=>$response));
}
?>