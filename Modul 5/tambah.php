<center>
<form name='tambah' method='post' action='tambah.php' enctype="multipart/form-data" >
<p>ID Berita : <input type='text' name='berita_id'></p>
<p>ID Admin : <input type='text' name='id_admin'></p>
<p>Judul : <input type='text' name='judul'></p>
<p>Tanggal Terbit : <input type='date' name='tgl_terbit'></p>
<p>Konten : <input type='text' name='content'></p>
<input type='submit' name='input' value='Input Data'>
</form>
</center>

<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
include "koneksi.php";
$berita_id	= $_POST['berita_id_L200160060'];
$id_admin	= $_POST['id_admin'];
$judul = $_POST['judul_L200160060'];
$tgl = date(Y-m-d);
$content = $_POST['content'];


$input= $_POST['input'];
if($input){
	$sql = "insert into berita(berita_id_L200160060,id_admin,judul_L200160060,tgl_terbit_L200160060,content) 
		values('$berita_id','$id_admin','$judul','$tgl_terbit','$content')";
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