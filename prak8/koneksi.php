<html>
    <head>
        <title>KONEKSI DATABASE MySQL</title>
    </head>
    <body>
        <h1>Demo Koneksi Database MySQL</h1> 
        <?php 
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "db_akademik";
            $koneksi = mysqli_connect($host, $username, $password, $database);

            if ($koneksi) {
                echo "OK";
            }else{
                echo "Server not Connected";
            }
        ?>
    </body>
</html>