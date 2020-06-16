<?php 
	$gaji = [
		'Budi' => 2000000,
		'Tono' => 1000000,
		'Gadis' => 2500000
	];
	
	echo 'gaji Budi = '.$gaji['Budi'].'<br>';
	echo 'gaji Tono = '.$gaji['Tono'].'<br>';
	echo 'gaji Gadis = '.$gaji['Gadis'].'<br><br>';
	
	echo 'Akses pakai foreach : <br>';
	foreach($gaji as $key => $value) {
		echo 'gaji '.$key.' adalah '.$value.'<br>';
	}