<?php 
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    function tambah(int $angka1, int $angka2){
        kata("Tambah");
        echo ($angka1 + $angka2);
    }

    function kurang(int $angka1, int $angka2){
        kata("Kurang");
        echo ($angka1 - $angka2);
    }

    function kali(int $angka1, int $angka2){
        kata("Kali");
        echo ($angka1 * $angka2);
    }

    function bagi(int $angka1, int $angka2){
        kata("Bagi");
        echo ($angka1 / $angka2);
    }

    function modulus(int $angka1, int $angka2){
        kata("Modulus");
        echo ($angka1 % $angka2);
    }

    function kata(string $operator){
        echo "Hasil dari Operator ".$operator." Adalah : ";
    }
    $operator=="tambah"? tambah($angka1,$angka2) : '';
    $operator=="kurang" ? kurang($angka1,$angka2) : '';
    $operator=="kali" ? kali($angka1,$angka2) : '';
    $operator=="bagi"? bagi($angka1,$angka2)  : '';
    $operator=="modulus"? modulus($angka1,$angka2) : '';

?>