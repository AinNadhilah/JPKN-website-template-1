<?php
$page = $_GET["page"];
$page = filter_var($page, FILTER_SANITIZE_STRING);
$page = mysqli_real_escape_string($conn_cpanel,$page);

switch ($page) {

    //PERUTUSAN/SEJARAH **TEXT & GAMBAR
    case 'perutusan':
    $load = 'perutusan.php';
    break;

    //GALERI/ALBUM **THUMBNAIL, LIST **FILE
    case 'galeri':
    $load = 'galeri.php';
    break;

    //VIDEO **THUMBNAIL, LIST **FILE/LINK
    case 'video':
    $load = 'video.php';
    break;

    //PENERBITAN/KERATAN AKHBAR/MAJALAH **FILE/LINK
    case 'penerbitan':
    $load = 'penerbitan.php';
    break;

    //SENARAI NOMBOR TELEFON
    case 'direktori':
    $load = 'direktori.php';
    break;

    //CARTA ORGANISASI **TEXT&GAMBAR
    case 'carta':
    $load = 'carta.php';
    break;

    //TAJUK, BUTIRAN, GAMBAR, LINK
    case 'text_pic':
    $load = 'text_pic.php';
    break;

    //TAJUK, BUTIRAN, LINK
    case 'maklumbalas':
    $load = 'maklumbalas.php';
    break;

    //TAJUK, BUTIRAN, LINK
    case 'text_nopic':
    $load = 'text_nopic.php';
    break;
}
?>
