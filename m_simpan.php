<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];

$sql=mysql_query("insert into masyarakat values('$nik','$nama','$username','$password','$telp')");

if($sql)
{
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Disimpan');
        window.location="login.php";
    </script>
    <?php
}
else
{
    ?>
    <script type="text/javascript">
        alert('Terjadi Kesalahan Silahkan Ulangi');
        window.location="register.php";
    </script>
    <?php
}
?>