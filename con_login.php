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
	session_start();
<<<<<<< HEAD
	$_SESSION['username'] =$datasql ['username']; 
=======
	$_SESSION['username'] = $datasql['username'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
>>>>>>> e09c44311136374f6b565a314557ef4840bd8d9a
	
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
}else{
	//jika gagal balik lagi ke halaman login
	header('location:index.php');
}

?>