<html>

<head>
    <?php
    session_start();
    include "koneksi.php";
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $operator = $_SESSION['username'];
    
    $sql = "insert into penjualan values ('" . $nama . "', '" . $jumlah . "', NOW() , '" . $operator . "')";
        $a = $koneksi->query($sql);

        if ($a === true) {
        ?>
            <script type="text/javascript">
                window.alert("Masukkan Data Berhasil!");
                location.replace('pengguna.php');
            </script>
    <?php
        } else {
            echo "Error";
        }
    
    ?>
</head>

</html>