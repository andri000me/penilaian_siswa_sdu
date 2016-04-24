<?php
require "koneksi.php";
require "user_cek_auth.php";

//get id
$id = $_GET['id'];

// get photo
$sqlphoto = "select * from tab_siswa where id = '$id'";
$exsqlphoto = mysql_query($sqlphoto);
$dataphoto = mysql_fetch_array($exsqlphoto);
 
if(empty($dataphoto['foto'])){
			 
			}else{
		 	unlink("foto_siswa/".$dataphoto['foto']);
			}

//del all data
$sql = "delete from tab_siswa where id = '$id'";
$exsql = mysql_query($sql);

if($exsql == TRUE){
	 	echo "<script language=javascript>
	          alert('Berhasil Menghapus Data');
	          window.location='master_siswa.php';
	          </script>";
}else{
		echo "<script language=javascript>
	          alert('Gagal Menghapus Data');
	          window.location='master_siswa.php';
	          </script>";

}
?>