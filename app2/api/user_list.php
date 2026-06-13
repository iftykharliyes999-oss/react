<?php 

include_once("dbconfig.php");
$sql = $db->query("SELECT * FROM users");

// $rawData = $sql->fetch_assoc();

// print_r($rawData);

$records = [];
 while($raw = $sql->fetch_assoc()){ 


        $records[] = $raw;


 }

//  echo "<pre>";
//  print_r($records);
echo json_encode($records);


?>