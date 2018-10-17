<?php
	$deleteNim = $_GET['nim'];

	include 'connect.php';

	$sql = "DELETE FROM mahasiswa WHERE nim = $deleteNim";
	$delete = $conn->query($sql);
	if (mysqli_affected_rows($conn)>0) {
		header('Location:tampilData.php');
		# code...
	}
?>