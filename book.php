<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $data = json_decode(file_get_contents('php://input'), true);
    $response = array();
    $airline = $data['airline'];
    $spots = $data['spots'];
    $trans_dt = $data['trans_dt'];
    $clientid = $data['clientid'];


    $insert = "INSERT INTO booking VALUE(NULL,'$airline','$spots','$trans_dt','$clientid')";
    if (mysqli_query($con,$insert))
    {
        $response['value'] = 1;
        $response['message'] = "Record Successfully";
        echo json_encode($response);
    }
    else
    {
        $response['value'] = 0;
        $response['message'] = "Record Failed";
        echo json_encode($response);
    }
     
    
    

  
   
 
}

?>