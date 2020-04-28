<?php
if(isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case'Masukan Data';
        include'a_input.php';
        break;

        case'Lihat Data';
        include'a_pengaduan.php';
        break;
    }
}
else
{
    ?>
    Anda Berhasil login Sebagai Admin
    <?php

    require '../koneksi.php';
    $sql=mysql_query("select * from pengaduan where status'0'");
    if (cek=mysql_num_rows($sql))
}
?>