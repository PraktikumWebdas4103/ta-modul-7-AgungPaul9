<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
</head>
<body style="font-family: century gothic">
	<?php
		include 'connect.php';
		if (isset($_POST['find'])) {
			$findNim = $_POST['findNim'];
			# code...
			$sql = "SELECT * FROM mahasiswa WHERE nim = $findNim";
			$show = $conn->query($sql);
			$data = mysqli_fetch_array($show);
		}
	?>
	<h1>Data Diri</h1><hr>
	<table>
		<tr>
			<td>Nama</td>
			<td><?php echo $data['name']; ?></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><?php echo $data['nim']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $data['gender']; ?></td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td><?php echo $data['studyProg']; ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><?php echo $data['faculty']; ?></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><?php echo $data['region']; ?></td>
		</tr>
		<tr>
			<td>Motto</td>
			<td><?php echo $data['motto']; ?></td>
		</tr>
	</table>
</body>
</html>