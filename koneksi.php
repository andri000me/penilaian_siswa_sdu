<?php
//skrip koneksi database
$connect = mysql_connect("localhost","root","");
$db = mysql_select_db("penilaian_siswa_db",$connect);

if(!$connect && !$db){
echo "database tidak ada atau koneksi bermasalah";
exit();
}
?>