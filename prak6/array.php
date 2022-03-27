<html>

<head>
    <?php
    $arr = array(
        "Nama" => array(
            "Reza", "Raka", "Darel", "David", "Dimas", "Dayat", "Hamzah", "Adit", "Rozaq", "Rara", "Reyval", "Salsa", "Lala", "Dinda", "Awang", "Naufal", "Zaki", "Fahmi", "Ari", "Ardi", "Dony", "Ghozy", "Ilham", "Rizky", "Nur", "Fauzi", "Sandre", "Arya", "Bayu", "Adam"
        ),
        "NRP" => array(
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30
        ),
        "IPK" => array(
            3.73, 3.4, 3.2, 3.1, 3.0, 2.9, 3.1, 3.2, 3.15, 3.1, 3.0, 2.9, 3.1, 3.2, 3.15, 3.1, 3.0, 2.9, 3.1, 3.2, 3.15, 3.1, 3.0, 3.1, 3.2, 3.15, 3.1, 3.0, 2.9, 3.1
        ),
        "Rambut" => array(
            "Hitam Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Lurus", "Pirang Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Lurus", "Pirang Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Lurus", "Pirang Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Lurus", "Pirang Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Lurus", "Hitam Keriting", "Hitam Lurus", "Hitam Keriting", "Hitam Lurus",
        ),
        "Bb" => array(
            50, 50, 50, 50, 51, 52, 56, 60, 63, 70, 60, 50, 50, 50, 51, 52, 56, 60, 63, 70, 60, 50, 50, 50, 51, 52, 56, 60, 63, 70,
        ),
        "Tb" => array(
            160, 150, 155, 167, 165, 160, 160, 175, 180, 160, 160, 150, 155, 167, 165, 160, 160, 175, 180, 174, 160, 150, 155, 167, 165, 160, 160, 175, 180, 174,
        ),
        "Status" => array(
            "Cuti", "Aktif", "Cuti", "Aktif", "Aktif", "Aktif", "Aktif", "Cuti", "Aktif", "Aktif", "Cuti", "Aktif", "Cuti", "Aktif", "Aktif", "Aktif", "Aktif", "Cuti", "Aktif", "Aktif", "Cuti", "Aktif", "Cuti", "Aktif", "Aktif", "Aktif", "Aktif", "Cuti", "Aktif", "Aktif",
        )
    );
    $jumlah = count($arr['Nama']);

    //kondisi 1
    echo "<br> <b>Kondisi 1 : IPK mahasiswa > 3.00 dan < 3.25 </b><br>";
    for ($i = 0; $i < $jumlah; $i++) {
        if ($arr['IPK'][$i] > 3.00 && $arr['IPK'][$i] < 3.25) {
            echo $arr['Nama'][$i] . " Dengan NRP " . $arr['NRP'][$i];
            echo "<br>";
        }
    }
    //kondisi 2
    echo "<br><b> Kondisi 2 : Mahasiswa berambut hitam dan lurus</b> <br>";
    for ($i = 0; $i < $jumlah; $i++) {
        if ($arr['Rambut'][$i] == "Hitam Lurus") {
            echo $arr['Nama'][$i] . " Dengan NRP " . $arr['NRP'][$i];
            echo "<br>";
        }
    }
    //kondisi 3
    echo "<br> <b>Kondisi 3 : Mahasiswa memiliki berat badan 50 kg dan tinggi badan 160 cm </b><br>";
    $awal = 0;
    while ($awal < $jumlah) {
        if ($arr['Bb'][$awal] == 50 && $arr['Tb'][$awal] == 160) {
            echo $arr['Nama'][$awal] . " Dengan NRP " . $arr['NRP'][$awal];
            echo "<br>";
        }
        $awal++;
    }
    //kondisi 4
    echo "<br> <b>Kondisi 4 : Mahasiswa tidak sedang menjalani cuti </b><br>";
    $awal1 = 0;
    do {
        if ($arr['Status'][$awal1] == "Aktif") {
            echo $arr['Nama'][$awal1] . " Dengan NRP " . $arr['NRP'][$awal1];
            echo "<br>";
        }
        $awal1++;
    } while ($awal1 < $jumlah);
    ?>
</head>

</html>