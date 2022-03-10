<?php 
    session_start();
    include "koneksi.php";
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    if (!isset($_SESSION['username'])) {
        die("Anda belum login");
    }
    $username=$_SESSION['username'];
    $level=$_SESSION['level'];

    $query_1="select * from register where username='$user' and password='$psw'";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>INPUT PEMBELLIAN</h1>
<form action="action_pembelian.php" method="POST">
            <table>
                <tr>
                    <td>Nama Barang :</td>
                    <td><select name="nama" required=""> 
                    <?php 
                include "koneksi.php";
                $a = "select * from barang";
                $b=$koneksi->query($a);
                while ($c = $b->fetch_array()) {
            ?>
            <option value=<?php echo $c['namabarang'];?>><?php echo $c['namabarang'];?></option>
            <?php 
            }
            ?>                
                </select></td>
                </tr>
                <tr>
                    <td>Jumlah :</td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="Input Data"></td>
            </table>
        </form>
        <br>
        <h1>INPUT BARANG</h1>
        <form action="action_barang.php" method="POST">
            <table>
                <tr>
                    <td>Nama Barang :</td>
                    <td><input type="text" name="namabarang"></td>
                </tr>
                <tr>
                    <td>Stok Awal :</td>
                    <td><input type="number" name="jumlahbarang"></td>
                </tr>
                <td></td>
                <td><input type="submit" value="Input Data"></td>
            </table>
        </form>
</body>
</html>