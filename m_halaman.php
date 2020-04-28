<?php
if(isset($_GET['url']))
{
    $url=$_GET['url'];

    switch($url)
    {
        case'Masukan Data';
        include'm_input.php';
        break;

        case'Lihat Data';
        include'm_pengaduan.php';
        break;
    }
}
else
{
    ?>
    Anda Berhasil login Masyarakat
    <?php
}
?>