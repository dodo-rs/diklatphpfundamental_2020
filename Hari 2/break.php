<?php 
	$array = array (1,2,3,4,5);
	$lengthArray = count ($array);
	echo 'panjang array = '.$lengthArray.' <br>';
		
	foreach ($array as $value)	{
		echo 'value = '.$value.', ';
		if ($value == 3) {
			break;
	}
	}
	
	echo '<br>';
	
	for ($i=0; $i<$lengthArray; $i++) {
		echo 'value = '.$array[$i].', ';
	}