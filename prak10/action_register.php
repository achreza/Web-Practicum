<html>

<head>
    <?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ulangpassword = $_POST['ulangpassword'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $level = $_POST['level'];

    if ($password != $ulangpassword) {
    ?>
        <script type="text/javascript">
            window.alert("Ulangi. Password Tidak sama!")
            history.back();
        </script>
        <?php
    } else {
        $newPass = md5($password);
        $sql = "insert into register values ('" . $username . "', '" . $newPass . "', '" . $email . "', '" . $nama . "', '" . $level . "' )";
        $a = $koneksi->query($sql);

        if ($a === true) {
        ?>
            <script type="text/javascript">
                window.alert("Daftar Berhasil!");
                location.replace('formregister.php');
            </script>
    <?php
        } else {
            echo "Error";
        }
    }
    ?>
</head>

</html>