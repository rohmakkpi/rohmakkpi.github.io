<?php
	session_start();
?>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<?php
		if(isset($_SESSION["username"])){
			echo "Selamat Datang ". $_SESSION["username"] . "<br>";
			echo "Anda sebagai ". $_SESSION["role"] . "<br>";
			echo '<a href="LoginForm.php">Logout</a>';
		}
		else{
			echo "Anda belum Login <br>";
		}
	?>
</body>
</html>
