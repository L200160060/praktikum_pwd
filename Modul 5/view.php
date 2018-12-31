
<h1 align='center'>Data Siswa</h1>
<p align='center'><a href='insert.php'>Tambah Data</a></p>
<table border='5' align='center' cellpadding="5">
	<tr>
		<th>NIM</th>
		<th>NAMA</th>
		<th>Kelas</th>
		<th>Alamat</th>	
		<th>Keterangan</th>
	</tr>
<?php
include "koneksi.php";

$sql ="select * from data";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($query)){
	echo "
		<tr>
			
			<td>$data[nim]</td>
			<td>$data[nama]</td>
			<td>$data[kelas]</td>
			<td>$data[alamat]</td>
			
			<td>
			
			<a href='update.php?upd=$data[nim]'><center>Ubah</center>
			</td>
		</tr>";
	
}
?>	
</table>
<p align='center'><a href='../admin/login.php'>Selesai</a></p>
