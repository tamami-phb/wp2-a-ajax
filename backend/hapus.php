<?php
require_once "../connection.php";
$json = file_get_contents('php://input');
$data = json_decode($json);

$sql = "delete from mahasiswa where nim='" .
    $data->nim . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$resp = new stdClass();
if($row > 0) {
    $resp->status = "ok";
} else {
    $resp->status = "gagal";
}
echo json_encode($resp);
?>