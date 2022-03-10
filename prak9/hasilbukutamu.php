<html>
    <head>
        <title>Hasil Bukutamu</title>
    </head>
    <body>
        <a href="form_6.php">Tambah data</a>
        <table>
            <tr>
                <thead>
                    <td>No.</td>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Komentar</th>
                </thead>
            </tr>
            <tbody>
                <?php 
                    $no = 1;
                    include "koneksi.php";
                    $a = "select * from bukutamu";
                    $b = $koneksi->query($a);
                    while($c=$b->fetch_array()) {
                ?>
                <tr>
                    <th><?php echo $no++;?></th>
                    <th><?php echo $c['nama']; ?></th>
                    <th><?php echo $c['email']; ?></th>
                    <th><?php echo $c['komentar']; ?></th>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </body>
</html>