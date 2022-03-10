<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="action_register.php" method="POST">
        <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" name="username" required=""></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="password" required=""></td>
            </tr>
            <tr>
                <td>Ulangi Password : </td>
                <td><input type="password" name="ulangpassword" required=""></td>
            </tr>
            <tr>
                <td>Nama Lengkap : </td>
                <td><input type="text" name="nama" required=""></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email" required=""></td>
            </tr>
            <tr>
                <td>Level : </td>
                <td>
                <select name="level" required=""> 
                    <option value="Admin">Admin</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Dosen">Dosen</option>
                </select>
                </td>
            </tr>
           
            <tr>
                <td><input type="submit" value="SAVE"></td>
                <td><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
</body>
</html>