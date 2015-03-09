<?php

 

$response = array();
 

if (isset($_POST['person']) && isset($_POST['symptoms']) && isset($_POST['userID']) && isset ($_POST['latitude']) && isset ($_POST['longitude'])) {
    $person= $_POST['person'];
    $symptoms= $_POST['symptoms'];
    $userID=$_POST['userID'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    require_once __DIR__ . '/connect.php';
    $db = new DB_CONNECT();
    $result = mysql_query("INSERT INTO reports(person,symptoms,userID,latitude,longitude) VALUES('$person','$symptoms','$userID','$latitude','$longitude')");
 
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