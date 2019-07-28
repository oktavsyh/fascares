<?php
include '../db.php';
// Query propinsi
$kec = $_GET['kec'];
$result = mysql_query("SELECT * FROM detail_kejadian WHERE id_kec ='$kec' ");
 
$results_array = array();
while($row = mysql_fetch_array($result)) {
    $results_array[$row['tahun']] = $row['tahun'];
}
 
echo json_encode($results_array);
?>