<?php
require 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from petugas where username='$username' and password='$password'");
$cek=mysql_num_rows($sql);

if ($cek>0)
{
	$data=mysql_fetch_array($sql);
if ($data['level']=="admin")
{
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['nama']=$data['nama_petugas'];
		$_SESSION['level']=$data['level'];

		header('location:admin/a_dashboard.php');
}
else if ($data['level']=="petugas")
{
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['nama']=$data['nama_petugas'];
		$_SESSION['level']=$data['level'];

		header('location:petugas/p_dashboard.php');
}
else
{
	?>
	<script type="text/javascript">
        alert('Username atau Password tidak ditemukan');
        window.location="login2.php";
    </script>
    <?php
}
}
?>