<html>

<head>
    <?php
    session_start();
    include "koneksi.php";
    $nama = $_POST['namabarang'];
    $jumlah = $_POST['jumlahbarang'];
    $operator = $_SESSION['username'];
    
    $sql = "insert into barang values ('" . $nama . "', '" . $jumlah . "')";
        $a = $koneksi->query($sql);

        if ($a === true) {
        ?>
            <script type="text/javascript">
                window.alert("Masukkan Data Barang Berhasil!");
                location.replace('home.php');
            </script>
    <?php
        } else {
            echo "Error";
        }
    
    ?>
</head>

</html>