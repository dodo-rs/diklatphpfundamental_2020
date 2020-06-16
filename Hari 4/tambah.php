<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="view.php">Lihat Data User</a>
	<br/><br/>
	
	<form action="tambah.php" method="post" name="forml">
		<table width="25%" borber="0">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
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
	
	// Check if form submitted, insert form data into users table
	if(isset($_POST['submit'])) {
		$nama = strtoupper($_POST['nama']);
		$alamat = strtoupper ($_POST['alamat']);
		
		// include database connection file
		include_once("koneksi.php");
		
	$result = mysqli_query($connect, "INSERT INTO user(nama,alamat) VALUES('$nama','$alamat')");
	// Insert user data into table
	
		// Show message when user added
		echo "User added successfully, <a href='view.php'>View Users</a>";
	}
	?>