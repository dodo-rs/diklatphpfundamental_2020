<?php 
	$array = array (1,2,3,4,5);
	$lengthArray = count ($array);
	echo 'panjang array = '.$lengthArray.' <br>';
		
	foreach ($array as $value)	{
		if ($value == 3) 
			continue;
		
		echo 'value = '.$value.', ';
	}