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
    Anda Berhasil login Sebagai Petugas
    <?php
}
?>