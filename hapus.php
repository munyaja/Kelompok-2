<?php 
require 'functions.php';
session_start();

if(isset($_SESSION['loggedIn']) != true){ 
    header("Location: index.php");
}

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index.php';
		</script>
	";
}

?>