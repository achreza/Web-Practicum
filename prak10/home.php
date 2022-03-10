<?php 
    session_start();
    include "koneksi.php";
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    if (!isset($_SESSION['username'])) {
        die("Anda belum login");
    }
    $username=$_SESSION['username'];
    $level=$_SESSION['level'];
    if ($level=="Admin") {
        echo "Anda Sebagai ".$level;
    }elseif($level=="Mahasiswa") {
        echo "Anda Sebagai ".$level;
    }elseif ($level=="Dosen") {
        echo "Anda Sebagai ".$level;
    }
?>