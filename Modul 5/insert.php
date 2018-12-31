<center>
<form name='insert' method='post' action='insert.php'  >
<p>NIM : <input type='text' name='nim'></p>
<p>NAMA : <input type='text' name='nama'></p>
<p>Alamat : <input type='text' name='alamat'></p>
<p>Kelas : <input type='text' name='kelas'></p>



<input type='submit' name='input' value='Input Data'>
</form>
</center>

<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
include "koneksi.php";

$nim = $_POST['nim'];
$nama	= $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];


$input= $_POST['input'];
if($input){
	$sql = "insert into data(nim, nama, kelas, alamat) 
		values('$nim','$nama','$kelas','$alamat')";
	$run=mysqli_query($conn,$sql);
	
	if($run){
		?>
	<script>
		alert('Data Berhasil Dimasukkan');
		document.location='view.php';
	</script>
		<?php
	}
}
?>