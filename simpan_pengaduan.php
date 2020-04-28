<?php
require 'koneksi.php';
$nik=$_POST['nik'];
$tgl=date('Y/m/d');
$isi_laporan=$_POST['isi_laporan'];
$ft=$_FILES['foto']['name'];
$file=$_FILES['foto']['tmp_name'];
$st=0;

$sql=mysql_query("insert into pengaduan(nik,tgl_pengaduan,isi_laporan,foto,status) values('$nik','$tgl','$isi_laporan','$ft','$st')");
move_uploaded_file($file, "foto/".$ft);

if($sql)
{
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Disimpan, Terima Kasih Telah Melapor');
        window.location="m_dashboard.php";
    </script>
    <?php
}
else
{
    ?>
    <script type="text/javascript">
        alert('Terjadi Kesalahan Silahkan Ulangi');
        window.location="m_input.php";
    </script>
    <?php
}
?>