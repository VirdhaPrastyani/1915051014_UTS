<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_latihan6";

$koneksi = mysql_connect($server,$user,$pass) or die(mysql_error());

$selectDB = mysql_select_db($db) or die(mysql_error());
if (!$selectDB){
echo "Koneksi database gagal!!!";
}else{
//echo "koneksi berhasil";
}
?>