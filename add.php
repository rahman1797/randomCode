<?php

$koneksi = mysqli_connect('localhost','id7188487_root64','root64','id7188487_xxx');

$nama = $_GET['nama'];

mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama')");

header("location: index.php");

?>