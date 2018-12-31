<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
include "koneksi.php";
$upd=$_GET['upd'];
$sql = "select * from data where nim='$upd' ";
$query = mysqli_query($conn,$sql);
$hasil = mysqli_fetch_array($query);
?>
<center>
<form name='update' method='post' action='<?php $_SERVER['PHP_SELF'];?>' enctype="multipart/form-data" >
<p>NIM : <input type='text' name='nim' value='<?php echo $hasil[nim]; ?>' ></p>
<p>NAMA : <input type='text' name='nama' value='<?php echo $hasil[nama]; ?>'></p>
<p>KELAS:<input type='text' name='kelas' value='<?php echo $hasil[kelas]; ?>' ></p>
<p>ALAMAT:<input type='text' name='alamat' value='<?php echo $hasil[alamat]; ?>' ></p>


<input type='submit' name='input' value='Ubah Data'>
</form>
</center>

<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];


$input = $_POST['input'];
if($input){
	$sql = "update data set nim='$nim',nama='$nama', alamat='$alamat', kelas='$kelas' where nim='$upd' ";
	$query=mysqli_query($conn,$sql);
	if($query){
		?>
		<script>alert("Data Berhasil Diubah");
		document.location='view.php'</script>
		<?php
	}
	
}
?>