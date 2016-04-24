<?php
//jika session tidak ada, maka akan dibuatkan session
if(!isset($_SESSION)){
	session_start();
}

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
<<<<<<< HEAD
	header("location:index.php");
}
=======
		header("location:index.php");
	}
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0

?>