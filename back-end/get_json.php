
<?php
 


$response = array();
require_once __DIR__ . '/connect.php';
$db = new DB_CONNECT();
$result = mysql_query("SELECT pid,person,symptoms,userID,latitude,longitude,created_at FROM reports") or die(mysql_error());
 
if (mysql_num_rows($result) > 0) {
       $rows= array();
    while ($r= mysql_fetch_assoc($result)) {
      $rows[] = $r;
    }
    echo json_encode($rows);
} else {
}
?>