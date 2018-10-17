<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 7</title>
</head>
<body style="font-family: century gothic">
	<h1>Input Mahasiswa</h1><hr>
	<form action="" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
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
				<td><input type="text" name="region"></td>
			</tr>
			<tr>
				<td>Moto Hidup</td>
				<td><textarea name="motto"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"><br><a href="tampilData.php">Lihat Data</a></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
include 'connect.php';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$nim = $_POST['nim'];
		$gender = $_POST['gender'];
		$studyProg = $_POST['studyProg'];
		$faculty = $_POST['faculty'];
		$region = $_POST['region'];
		$motto = $_POST['motto'];
		
		if (strlen($name) >= 35) {
				die("Nama jangan lebih dari 35 karakter". mysqli_connect_error());
			}
		if (strlen($nim) != 10){
			die("nim harus 10 karakter". mysqli_connect_error());
		}

		$sql = "INSERT INTO mahasiswa VALUES('$name', '$nim', '$gender', '$studyProg', '$faculty', '$region', '$motto')";
		if (mysqli_query($conn, $sql)){
			echo "<br>Registrasi Telah Berhasil";
		}else{
			echo "Gagal Regis Gan";
		}
		# code...
	}
?>