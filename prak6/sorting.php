<html>

<head>
    <?php
    $arr = array(
        "Nama" => array(
            "Reza"=>1, "Raka"=>2, "Darel"=>3, "David"=>4, "Dimas"=>5, "Dayat"=>6, "Hamzah"=>7, "Adit"=>8, "Rozaq"=>9, "Rara"=>10, "Reyval"=>11, "Salsa"=>12, "Lala"=>13, "Dinda"=>14, "Awang"=>15, "Naufal"=>16, "Zaki"=>17, "Fahmi"=>18, "Ari"=>19, "Ardi"=>20, "Dony"=>21, "Ghozy"=>22, "Ilham"=>23, "Rizky"=>24, "Nur"=>25, "Fauzi"=>26, "Sandre"=>27, "Arya"=>28, "Bayu"=>29, "Adam"=>30
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

    function namaAsc(array $arr)
    {
        $new = $arr;
        ksort($new['Nama']);
        return $new;
    }

    function nrpDesc(array $arr)
    {
        $new = $arr;
        arsort($new['Nama']);
        return $new;
    }

    // $nrp ()-> arsort($arr['Age']);

    echo "<b>Nama (Ascending)</b><br>";

    foreach(namaAsc($arr)['Nama'] as $nama => $nrp) {
        echo $nama . " Dengan NRP " . $nrp;
        echo "<br>";
      }


    echo "<br><b>NRP (Descending)</b><br>";

    foreach(nrpDesc($arr)['Nama'] as $nama => $nrp) {
        echo $nama . " Dengan NRP " . $nrp;
        echo "<br>";
      }

    ?>
</head>

</html>