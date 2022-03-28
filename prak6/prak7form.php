<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FORM INPUT DATA</h2>
    <form action="act_prak7form.php" method="post">
            <table>
        
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="cowok">Cowok
                        <input type="radio" name="jk" value="cewek">Cewek
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Hitung</td>
                    <td>
                        : 9 + 8
                    </td>
                </tr>
                <tr>
                    <td>Jawab</td>
                    <td><input type="text" name="jawab"></td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>