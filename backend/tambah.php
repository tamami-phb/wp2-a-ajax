<?php
header('Access-Control-Allow-Origin: *');
require_once "../connection.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

$sql = "insert into mahasiswa(nim, nama, kelas) values('" . 
    $data->nim . "','" . $data->nama . "','" . $data->kelas . "')";
$result = pg_query($sql);
$num = pg_affected_rows($result);
$resp = new stdClass();
if($num > 0) {
    $resp->status = "ok";
} else {
    $resp->status = "gagal";
}

echo json_encode($resp);
?>