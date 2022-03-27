<?php 
    $arr = array(
        "Nama" => array(
            "Reza", "Raka", "Darel", "David", "Dimas", "Dayat", "Hamzah", "Adit", "Rozaq", "Rara", "Reyval", "Salsa", "Lala", "Dinda", "Awang", "Naufal", "Zaki", "Fahmi", "Ari", "Ardi", "Dony", "Ghozy", "Ilham", "Rizky", "Nur", "Fauzi", "Sandre", "Arya", "Bayu", "Adam"
        ),
        "NRP" => array(
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30
        ),
        "Kelas" => array(
            "D4-A", "D4-B", "D4-A", "D4-A", "D4-C", "D4-B", "D4-A", "D4-A", "D4-C", "D4-B", "D4-A", "D4-A", "D4-B", "D4-A", "D4-A", "D4-C", "D4-B", "D4-A", "D4-A", "D4-C", "D4-B", "D4-A", "D4-A", "D4-B", "D4-A", "D4-A", "D4-B", "D4-A", "D4-B", "D4-A",
        ),
        "Doswal" => array(
            "Aramburu Joseph", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Desy Intan Permatasari", "Desy Intan Permatasari", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Desy Intan Permatasari", "Desy Intan Permatasari", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Desy Intan Permatasari", "Desy Intan Permatasari", "Desy Intan Permatasari", "Aramburu Joseph", "Desy Intan Permatasari", "Desy Intan Permatasari",
        ),
        "Nilai" => array(
            "A", "B", "A", "A", "C", "B", "A", "A", "C", "B", "A", "A", "B", "A", "A", "C", "B", "A", "A", "C", "B", "A", "A", "B", "A", "A", "B", "A", "B", "A",
        ),
        "Himit" => array(
            "Nonaktif", "Aktif", "Nonaktif", "Aktif", "Aktif", "Aktif", "Aktif", "Nonaktif", "Aktif", "Aktif", "Nonaktif", "Aktif", "Nonaktif", "Aktif", "Aktif", "Aktif", "Aktif", "Nonaktif", "Aktif", "Aktif", "Nonaktif", "Aktif", "Nonaktif", "Aktif", "Aktif", "Aktif", "Aktif", "Nonaktif", "Aktif", "Aktif",
        )


    );
    $jumlah = count($arr['Nama']);

    function getNama(int $nrp,array $arr)
    {
        return $arr['Nama'][$nrp];
    }

    function getKelas(int $nrp,array $arr)
    {
        return $arr['Kelas'][$nrp];
    }

    function printOutput(int $index, array $arr){
        echo getNama($index,$arr)." adalah Mahasiswa Kelas ";
        echo getKelas($index,$arr)." yang aktif di Himit <br>"; 
    }

    function zero(){}

    for ($i=1; $i < $jumlah; $i++) { 
        ($arr['Kelas'][$i] == "D4-A" or "D4-B") and $arr['Doswal'][$i]  == "Desy Intan Permatasari" 
        and $arr['Nilai'][$i]  == "A" and $arr['Himit'][$i]  == "Aktif"?
         printOutput($i,$arr) : zero() ;

    }

    

?>