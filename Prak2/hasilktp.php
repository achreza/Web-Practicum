<?php
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$status = $_POST['status'];
$golongan = $_POST['golongandarah'];
$alamat = $_POST['alamat'];
?>

<html>

<head>
    <title>Hasil</title>
</head>
<body>
    <p>
        <b>NIK : </b>
        <?php echo $nik; ?><br>
        <b>Nama : </b>
        <?php echo $nama; ?><br>
        <b>Tempat, Tanggal Lahir : </b>
        <?php echo $ttl; ?><br>
        <b>Jenis Kelamin : </b>
        <?php echo $jk; ?><br>
        <b>Agama : </b>
        <?php echo $agama; ?><br>
        <b>Status Perkawinan : </b>
        <?php echo $status; ?><br>
        <b>Golongan Darah : </b>
        <?php echo $golongan; ?><br>
        <b>Alamat : </b>
        <?php echo $alamat; ?>
    </p>
</body>
</html>