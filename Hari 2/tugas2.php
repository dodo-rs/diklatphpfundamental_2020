<?php
	$nilai = [
		'Budi' => ['matematika' => 70, 'bhs indonesia' => 80, 'bhs inggris' => 90],
		'Tono' => ['matematika' => 60, 'bhs indonesia' => 70, 'bhs inggris' => 80],
		'Gadis' => ['matematika' => 55, 'bhs indonesia' => 75, 'bhs inggris' => 95]
	];
		
	echo 'Budi memiliki nilai matematika '.$nilai['Budi']['matematika']; echo ', '; echo 'bhs indonesia '.$nilai['Budi']['bhs indonesia']; echo ', '; echo 'bhs inggris '.$nilai['Budi']['bhs inggris']. '<br>';
	echo 'Tono memiliki nilai matematika '.$nilai['Tono']['matematika']; echo ', ';  echo 'bhs indonesia '.$nilai['Tono']['bhs indonesia']; echo ', '; echo 'bhs inggris '.$nilai['Tono']['bhs inggris']. '<br>';
	echo 'Gadis memiliki nilai matematika '.$nilai['Gadis']['matematika']; echo ', '; echo 'bhs indonesia '.$nilai['Gadis']['bhs indonesia']; echo ', '; echo 'bhs inggris '.$nilai['Gadis']['bhs inggris']. '<br>';
	
	echo '<br>Nilai matematika yang >= 60 adalah <br><br>';
	
		
	foreach ($nilai as $key => $value){
		foreach ($value as $k => $v){
			if ($v <=59)continue;
			if ($k =='bhs indonesia') continue;
			if ($k =='bhs inggris') continue;
			
			echo 'Nilai '.$k.' ' .$key.' = ' .$v.'<br>';
		}
	}