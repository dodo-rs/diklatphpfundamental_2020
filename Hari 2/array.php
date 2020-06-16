<?php 
	$data = [1,2,3,4,5];
			
	foreach ($data as $key => $val) {
		echo 'Value index ke '.$key.' = '.$val.'<br>';
	}
	
	echo '<br>';
	
	$numbers [0] = 'satu';
	$numbers [1] = 'dua';
	$numbers [2] = 'tiga';
	array_push($numbers,'empat');
	array_push($numbers,'lima');
	
	foreach ($numbers as $key => $value) {
		echo 'Value index ke '.$key.' = '.$value.' <br>';
	}