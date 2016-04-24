<?php
require "koneksi.php";
require "user_cek_auth.php";

//parsing dari form html nya
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nis = isset($_POST['nis']) ? $_POST['nis'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$tempat_lahir = isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
$no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';
$foto = $_FILES['foto']['name'];
 

 
move_uploaded_file($_FILES['foto']['tmp_name'], "foto_siswa/".$foto);
 
//statement input ke tabel/database
$sql = " UPDATE tab_siswa SET nis = '$nis', nama_siswa = '$nama',
		 tempat_lahir = '$tempat_lahir', tgl_lahir = '$tanggal_lahir',
		 alamat = '$alamat', id_kelas = '$kelas', telp = '$no_telp',
		 foto = '$foto', user_update = '$_SESSION[username]', 
		 date_update = now() where id = '$id'";

  
$exsql = mysql_query($sql);

if($exsql == TRUE){
 		echo "<script language=javascript>
	          alert('Berhasil Merubah Data');
	          window.location='master_siswa.php';
	          </script>";
}else{
		echo "<script language=javascript>
	          alert('Gagal Merubah Data');
	          window.location='edit_master_siswa.php?id=$id';
	          </script>";
}
 
?>