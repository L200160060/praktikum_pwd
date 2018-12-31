<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);

session_start();
?>
<form method='post' action='<?php $_SERVER['PHP_SELF'];?>'>
Username : <input type='text' name='username'>
<br>
Password : <input type='password' name='password'>
<br>
Status : <select name='status'>
						<option value='admin'>admin</option>
						<option value='user'> user </option>
<br>
<input type='submit' name='submit' value='Log In'>
</form>
<?php
include "konektor.php";
$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];
if($submit){
	$sql = "select * from user where username='$username' and password='$password' ";
	$query = mysqli_query($conn,$sql);
	$hasil= mysqli_fetch_array($query);
	if($hasil['status']=="admin"){
		$_SESSION['username']= $hasil[username];
		$_SESSION['status']= $hasil[status];
		?>
		<script>alert("Selamat Datang Admin");document.location='halaman_admin.php';</script>
		<?php
	}else if($hasil[status]=="user"){
		$_SESSION['username']= $hasil[username];
		$_SESSION['status']= $hasil[status];
		?>
		<script>alert("Selamat Datang Pengunjung");document.location='halaman_user.php';</script>
		<?php
	}else{
		?>
		<script>alert("Username dan Password Salah");document.location='login_admin.php';</script>
		<?php
	}
}
?>