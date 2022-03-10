<html>
    <head>
        <title>KONEKSI DATABASE MySQL</title>
    </head>
    <body>      
        <?php 
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "prakweb";
            $koneksi = mysqli_connect($host, $username, $password, $database);
            if ($koneksi) {
                echo "";
            }else{
                echo "Server not Connected";
            }
        ?>
    </body>
</html>