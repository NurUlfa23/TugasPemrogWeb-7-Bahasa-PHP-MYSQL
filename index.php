<h2>List Kontak</h2>
<table border="1"> 
	<tr><th>NO</th><th>ID</th><th>NAMA</th><th>GENDER</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php
	include 'koneksi.php'; // Memasukkan file koneksi.php
	$kontak = mysqli_query($koneksi, "SELECT * from kontak"); // Membuat variabel kontak yang menyimpan variabel koneksi dan query select
	$no=1; // Membuat variabel no yang menyimpan nilai 1
	foreach ($kontak as $row){ // Membuat perulangan
		echo "<tr> 
		     <td>$no</td>
		     <td>".$row['id']."</td>
		     <td>".$row['nama']."</td>
		     <td>".$row['jkel']."</td>
		     <td>".$row['email']."</td>
		     <td>".$row['alamat']."</td>
		     <td>".$row['kota']."</td>
		     <td>".$row['pesan']."</td>
		     </tr>";
		$no++;
	}
	?>
</table>