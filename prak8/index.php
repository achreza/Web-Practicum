<!DOCTYPE html>

<head>
    
    <title>Praktikum 8</title>
</head>
<body>
    <table border="1">
        <tr>
            <thead>
                <td>No.</td>
                <th>Nama Mata Kuliah</th>
            </thead>
        </tr>
        <tbody>
            <?php 
                $no =1 ;
                include "koneksi.php";
                $a = "select * from matkul";
                $b=$koneksi->query($a);
                while ($c = $b->fetch_row()) {
            ?>
            <tr>
                <th><?php echo $no++; ?></th>
                <th><?php echo $c['nm_matkul'];?></th>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>