<?php
	$name = "mahasiswa";
	$value = "Rohmawati";
	setcookie($name, $value, time()+600);
	
	setcookie("kelas","1-MI", time()+3600);
?>
<html>
<body>
<?php
	echo "Cookies telah dibuat";
?>
</body>
</html>

