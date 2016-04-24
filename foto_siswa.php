<?php
require "user_cek_auth.php";
require "koneksi.php";
$id = $_GET['id'];
$sql = "select * from tab_siswa where id = '$id'";
$exsql = mysql_query($sql);
$data = mysql_fetch_array($exsql);
 
$foto =  $data['foto'];

echo "<img src='foto_siswa/$foto'>";
?>