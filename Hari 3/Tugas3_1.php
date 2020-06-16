<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Looping</title>
</head>

<body>
<a href="tugas3.php">Back</a> <br>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nama = $_POST["nama"];
		$angka = $_POST["angka"];
		for($i=0; $i<$angka; $i++){
			echo 'Saya Cinta '.$nama;
			echo "<br/>";
		}
	}
	
?>
</body>
</html>