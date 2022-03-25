<?php
require_once '../connection.php';

$sql = "select * from mahasiswa";
$result = pg_query($sql);

$data = pg_fetch_all($result);
echo json_encode($data);
?>