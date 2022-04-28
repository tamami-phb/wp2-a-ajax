<?php
require_once "../connection.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

$sql = "select * from mahasiswa where nim='" . $data->nim . "'";
$result = pg_query($sql);

echo json_encode(pg_fetch_object($result));
?>