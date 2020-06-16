<?php 
	$nilai = [
		'tono' => [
			'matematika' => 70, 'fisika' => 80, 'biologi' => 60
		],
		'gadis' => [
			'matematika' => 80, 'fisika' => 50, 'biologi' => 75
		],
		'budi' => [
			'matematika' => 80, 'fisika' => 50, 'biologi' => 75
		]
	];
	
	echo 'nilai matematika tono adalah '.$nilai['tono']['matematika'];//cara pertama
	
	echo '<br><br>cetak pakai foreach :<br>';
	foreach($nilai as $key => $value) {
		foreach ($value as $k => $v) {
			echo 'Nilai '.$k.' '.$key.' adalah '.$v.'<br>';
		}
		echo '<br>';
	}