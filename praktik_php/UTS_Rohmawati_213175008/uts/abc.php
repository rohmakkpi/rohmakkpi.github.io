<html>
	<head>
	</head>
	<Body>
		<form action="abc.php" method="post">
		<label>ID pembeli</label>
		<input type="text", nama="myname" placeholder="Masukkan id"></br>
		<label>Nama</label>
		<input type="text", nama="myname" placeholder="Masukkan Nama"></br>
		<label>Status</label><br>
		<input type="radio" name="var4" value="r1">Member<BR>
		<input type="radio" name="var4" value="r2">No-member<BR>
		<BR>
		<b>Menu Makanan</b>
			<br>
				<select name="var6" size="1">
					<option value="NG">Nasi Goreng
					<option value="B">Bakso
					<option value="MA">Mie Ayam
					<option value="K" selected>Kebab
				</select>
		<br><br>
		<b>Menu Minuman</b>
			<br>
				<select name="var6" size="1">
				<option value="C">Cendol
				<option value="ET">Es Teh
				<option value="EB">Es Boba
				<option value="EC" selected>Es Campur
				</select>
		<br><br>
		<input type="submit">
		</form>
	</body>
</html>