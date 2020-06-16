<html> 
<body> 
<?php 
//If Else
	
/*
	Syarat :
	Grade < 60 = Tidak Lulus
	Grade 60 sd 69 = C
	Grade 70 sd 79 = B
	Grade 80 sd 100 = A
	*/
	
	$nilai_grade = 50;
	echo 'Nilai Anda = '.$nilai_grade.'<br>';
		
	
	if ($nilai_grade <60) {
		echo 'Anda Tidak Lulus<br><br>';
	} else if ($nilai_grade >=60 && $nilai_grade <=69) {
		echo 'Anda Masuk dalam Kategori C <br><br>';
	} else if ($nilai_grade >=70 && $nilai_grade <=79) {
		echo 'Anda Masuk dalam Kategori B <br><br>';
	} else if ($nilai_grade >=80 && $nilai_grade <=100) {
		echo 'Anda Masuk dalam Kategori A <br><br>';
	}
	
	$nilai_grade = 65;
	echo 'Nilai Anda = '.$nilai_grade.'<br>';
	
	
	if ($nilai_grade <60) {
		echo 'Anda Tidak Lulus<br><br>';
	} else if ($nilai_grade >=60 && $nilai_grade <=69) {
		echo 'Anda Masuk dalam Kategori C <br><br>';
	} else if ($nilai_grade >=70 && $nilai_grade <=79) {
		echo 'Anda Masuk dalam Kategori B <br><br>';
	} else if ($nilai_grade >=80 && $nilai_grade <=100) {
		echo 'Anda Masuk dalam Kategori A <br><br>';
	}
	$nilai_grade = 75;
	echo 'Nilai Anda = '.$nilai_grade.'<br>';
	
	
	if ($nilai_grade <60) {
		echo 'Anda Tidak Lulus<br><br>';
	} else if ($nilai_grade >=60 && $nilai_grade <=69) {
		echo 'Anda Masuk dalam Kategori C <br><br>';
	} else if ($nilai_grade >=70 && $nilai_grade <=79) {
		echo 'Anda Masuk dalam Kategori B <br><br>';
	} else if ($nilai_grade >=80 && $nilai_grade <=100) {
		echo 'Anda Masuk dalam Kategori A <br><br>';
	}
	
	$nilai_grade = 85;
	echo 'Nilai Anda = '.$nilai_grade.'<br>';
	
	
	if ($nilai_grade <60) {
		echo 'Anda Tidak Lulus<br><br>';
	} else if ($nilai_grade >=60 && $nilai_grade <=69) {
		echo 'Anda Masuk dalam Kategori C <br><br>';
	} else if ($nilai_grade >=70 && $nilai_grade <=79) {
		echo 'Anda Masuk dalam Kategori B <br><br>';
	} else if ($nilai_grade >=80 && $nilai_grade <=100) {
		echo 'Anda Masuk dalam Kategori A <br><br>';
	}

?> 
</body> 
</html>