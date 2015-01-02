<?php

include ('../inc/config.php');

$nama = $_POST['nama'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$aksi = $_POST['aksi'];

$sql = null;
if ($aksi == 'tambah') {
    $sql = "INSERT INTO lokasi(nama,lat,lng) VALUES('$nama','$lat','$lng')";
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
    header('location:../index.php?mod=lokasi&pg=lokasi_form&status=0');
} else {
    header('location:../index.php?mod=lokasi&pg=lokasi_form&status=1');
}
mysql_close();
?>
