
<?php
 


$response = array();
require_once __DIR__ . '/db_connect.php';
$db = new DB_CONNECT();
$result = mysql_query("SELECT pid,user,choice,userID,latitude,longitude,created_at FROM flu") or die(mysql_error());
 
if (mysql_num_rows($result) > 0) {
       $rows= array();
    while ($r= mysql_fetch_assoc($result)) {
      $rows[] = $r;
    }
    echo json_encode($rows);
} else {
}
?>