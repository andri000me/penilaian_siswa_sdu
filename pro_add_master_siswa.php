<?php
require "koneksi.php";
require "user_cek_auth.php";

//parsing dari form html nya
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
  $sql = "INSERT INTO tab_siswa (id,nis,nama_siswa,tempat_lahir,tgl_lahir,
	 	 					  alamat,id_kelas,telp,foto,user_insert,
		 					  date_insert)
		VALUES (null,'$nis','$nama','$tempat_lahir','$tanggal_lahir',
				'$alamat','$kelas','$no_telp','$foto',
				'$_SESSION[username]',now())";

 
$exsql = mysql_query($sql);

if($exsql == TRUE){
 		echo "<script language=javascript>
	          alert('Berhasil Menambah Data');
	          window.location='master_siswa.php';
	          </script>";
}else{
		echo "<script language=javascript>
	          alert('Gagal Menambah Data');
	          window.location='add_master_siswa.php';
	          </script>";
}
 
?>