<?php
require 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$sql=mysql_query("select * from masyarakat where username='$username' and password='$password' ");
$cek=mysql_num_rows($sql);

if ($cek>0)
{
	$data=mysql_fetch_array($sql);
	session_start();
	$_SESSION['nama']=$username;
	$_SESSION['nik']=$data['nik'];
	header('location:m_dashboard.php');
}
else
{
	?>
	<script type="text/javascript">
        alert('Username atau Password tidak ditemukan');
        window.location="login.php";
    </script>
<?php
}
?>