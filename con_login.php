<?php
include "koneksi.php";

//variabel tangkap data dari form
$username = isset($_POST['username']) ? $_REQUEST['username'] : '';
$password  = isset($_POST['password']) ? $_REQUEST['password'] : '';
$hashpassword = md5($password);

//perintah sql untuk menyeleksi data inputan
$sql = "select * from tab_user where username = '$username' and password = '$hashpassword'";

//eksekusi perintah sql
$executesql = mysql_query($sql);

//ambil data dari tabel 
$datasql = mysql_fetch_array($executesql);

//menghitung banyaknya data dari tabel
$availsql = mysql_num_rows($executesql);

if($availsql > 0){
	//jika login berhasil maka akan dialihkan ke halaman dashboard
	header('location:dashboard.php');
}else{
	//jika gagal balik lagi ke halaman login
	header('location:index.php');
}

?>