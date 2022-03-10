<html>

<head>
    <title>Luas Persegi Panjang</title>
</head>

<body>
    <p>Luasnya adalah:
        <?php
        $panjang = $_POST['panjang'];
        $tinggi = $_POST['tinggi'];

        echo $panjang * $tinggi;

        ?>
    </p>
</body>

</html>