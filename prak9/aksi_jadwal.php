<?php 
    include "koneksi.php";
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $ruang = $_POST['ruang'];
    $matkul = $_POST['matkul'];


    $sql = "insert into jadwal (id_matkul,hari,jam,ruang) values ('".$matkul."', '".$hari."', '".$jam."', '".$ruang."' )";
    $a=$koneksi->query($sql);

    if ($a === true) {
        header('location: hasiljadwal.php');
    }else {
        echo "error";
    }
?>