<?php
//jika session tidak ada, maka akan dibuatkan session
if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	header("location:index.php");
}

?>