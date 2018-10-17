<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
</head>
<body style="font-family: century gothic">
	<?php
		include 'connect.php';
		$showNim = $_GET['nim'];
		# code...
		$sql = "SELECT * FROM mahasiswa WHERE nim = $showNim";
		$show = $conn->query($sql);
		$data = mysqli_fetch_array($show);
	?>
	<h1>Data Diri</h1><hr>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim" value="<?php echo $data['nim']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="radio" name="gender" value="Male">Laki-laki<br>
				<input type="radio" name="gender" value="Female">Perempuan
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>
				<select name="studyProg">
					<option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
					<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>
				<select name="faculty">
					<option value="FIT">FIT</option>
					<option value="FKB">FKB</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="region" value="<?php echo $data['region']; ?>"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td><textarea name="motto"><?php echo $data['motto']; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"><br><a href="tampilData.php">Lihat Data</a></td>
		</tr>
		<!-- <tr>
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
		</tr> -->
	</table>
</body>
</html>