<?php
	include "connect.php";
	$query = mysqli_query($conn ,"SELECT * FROM mahasiswa ORDER BY nim DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show</title>
</head>
<body style="font-family: century gothic">
<h1>Menampilkan Data</h1>
<hr>
<form action="showData.php" method="post">
	Cari NIM <input type="text" name="findNim"><br>
	<input type="submit" name="find">
</form>
<center>
	<form action="" method="post">
    <table border="1" rules="all">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Action</th>
        </tr>
		<?php if(mysqli_num_rows($query)>0){ ?>
		<?php
			$no = 1;
			while($data = mysqli_fetch_array($query)){
		?>
        <tr>
			<td><?php echo $no ?></td>
			<td><?php echo $data["name"];?></td>
			<td><?php echo $data["nim"];?></td>
			<td>
				<a href="delete.php?nim=<?php echo $data["nim"];?>">Delete</a>
				<a href="show_edit.php?nim=<?php echo $data["nim"];?>">Edit</a>
			</td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
    <hr>
</form>
</center>
</body>
</html>