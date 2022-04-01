<?php
$json = file_get_contents('php://input');
header('Content-Type: application/json');
echo $json;
// $data = json_decode($json, true);
// echo json_encode($data);
?>