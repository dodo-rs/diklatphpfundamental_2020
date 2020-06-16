<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="tugas4_1.php">Masukkan Data Siswa</a>
	<br/><br/>
	
	<form action="tugas4.php" method="post" name="forml">
		<table width="25%" border="0">
			<tr>
				<td>Nomor Induk</td>
				<td><input type="text" name="no_induk"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="no_telepon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Add">
				</td>
			</tr>
			</table>
	</form>
<?php
	$host = "localhost";
	$username = "root"; 
	$password = ""; 
	$database = "phpfundamental"; 
	
	$connect = mysqli_connect($host, $username, $password, $database); 
?>	

<?php
	
	if(isset($_POST['submit'])) {
		$no_induk = strtoupper ($_POST['no_induk']);
		$nama = strtoupper ($_POST['nama']);
		$no_telepon = strtoupper ($_POST['no_telepon']);
		$alamat = strtoupper ($_POST['alamat']);
		
		$result = mysqli_query($connect, "INSERT INTO siswa(no_induk,nama,no_telepon,alamat) VALUES('$no_induk','$nama','$no_telepon','$alamat')");
		
		echo "User added successfully, <a href='tugas4_1.php'>View Users</a>";
	}
	?>