<?php

 

$response = array();
 

if (isset($_POST['user']) && isset($_POST['choice']) && isset($_POST['userID']) && isset ($_POST['latitude']) && isset ($_POST['longitude'])) {
    $user = $_POST['user'];
    $choice = $_POST['choice'];
    $userID=$_POST['userID'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    require_once __DIR__ . '/db_connect.php';
    $db = new DB_CONNECT();
    $result = mysql_query("INSERT INTO flu(user,choice,userID,latitude,longitude) VALUES('$user', '$choice','$userID','$latitude','$longitude')");
 
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "success";
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "failure";
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "something is missing";
    echo json_encode($response);
}
?>