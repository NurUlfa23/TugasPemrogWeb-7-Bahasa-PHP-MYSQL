<!DOCTYPE html>
<html>
<head>
	<title>Masukkan Kontak</title>
</head>
<body>
	<form method="post" action="aksitambah.php">
		<table>
			<tr><td>ID</td><td><input type="text" onkeyup="isi_otomatis()" name="id"></td></tr>
		    <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
		    <tr><td>GENDER</td><td><input type="text" name="jkel"></td></tr>
		    <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
		    <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
		    <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
		    <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr>

            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
		</table>
</form>
</body>
</html>