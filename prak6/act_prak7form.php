<?php 
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $email = $_POST['email'];
    $jawaban = $_POST['jawab'];

    function salah(){
        echo "Maaf jawaban Anda Salah<br>";
        echo "<a href='' onclick=history.back>Ulang</a>";
    }
    
    if ($jawaban=="17") {
        ?>
        <h2>Hasil Input Data</h2>
        <table border="1">
        <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Email</td>
            <td>Jenis Kelamin</td>
            <td>Jawaban</td>
        </tr>
        <tr>
            <td><?php echo $nama?></td>
            <td><?php echo $alamat?></td>
            <td><?php echo $email?></td>
            <td><?php echo $jk?></td>
            <td>Benar</td>
        </tr>
    </table>
    
    
        <?php
    }else {
        salah();
    } 
    ?>

    

