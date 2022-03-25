<?php
$conn_string = "host=satao.db.elephantsql.com port=5432 " . 
    "dbname=fzxmwwps user=fzxmwwps " .
    "password=UOgfEogE3J3qr3CdC447Gep8iQBfacZI";
$conn = pg_connect($conn_string);

// if($conn) {
//     echo "Koneksi DB Tersambung";
// } else {
//     echo "Koneksi DB GAGAL";
// }
?>