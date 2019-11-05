<?php
$reuuest_method = $_SERVER['REQUEST_METHOD'];
$response = array("data"=> "");
switch($reuuest_method){
    case "GET":
        response(doGet());
    break;
    case "POST":
        response(doPost());
    break;
    case "PUT":
       doPut();
    break;
    case "DELETE":
       doDelete();
    break;
}

Function doGet()
{
    if(@$_GET['id'])
    {
        @$id = $_GET['id'];
        $where = "WHERE 'id' = ".$id;
    }else{
        $id = 0;
        $where = "";
    }
    include('../config.php');
    $displayquery = "SELECT * from `login`".$where ;
    $query = mysqli_query($con,$displayquery); 
   while( $data =  mysqli_fetch_assoc($query))
   {
    $response[] = array("id"=>$data['id'],"uname"=>$data['uname'],"pass"=>$data['pass']);
   }
  return $response;
 // echo json_encode($data);
}

Function doPost(){
    if($_POST)
    {
        include('../config.php');
        $displayquery = "INSERT INTO `login`(´uname´,´pass´) VALUES('".$_POST['uname']."','".$_POST['pass']."')"; 
        $query = mysqli_query($con,$displayquery); 
       if($query == true)
       {
           $response = array("message"=>"success");
       }else{
        $response = array("message"=>"failed");
       }
    }
  return $response;
 
}

Function doPut(){
    echo "Put method called";
}

Function doDelete(){
    echo "Delete method called";
}

//output
Function response($response){
    echo json_encode(array("data"=>$response));
}
?>