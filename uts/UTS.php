<?php
$harga = $_POST['harga'];
?>
<html>

<head>
    <title>
        Hasil Perhitungan
    </title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif;">
    <p>
        <?php

        if ($harga > 200000) {
            echo "Harga yang Harus dibayar","<p id='demo'></p>";
        } else {
            echo "Harga yang Harus dibayar <br><br>",$harga;
        }
        ?>

        <script type="text/JavaScript">

        var javaVar = "<?php echo $harga; ?>";
            let x = diskon();

        function diskon (){
            return javaVar * 50 / 100;
        } 
        document.getElementById("demo").innerHTML = x;     
    </script>

    </p>
</body>

</html>