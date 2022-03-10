<html>
<head>
    <title>INSERT DATA</title>
</head>
<body>
    <form action="aksi_jadwal.php" method="POST">
        <table>
            <tr>
                <td>Hari : </td>
                <td>
                <select name="hari" required=""> 
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
                </td>           
            </tr>
            <tr>
                <td>Jam : </td>
                <td><input type="text" name="jam" required=""></td>
            </tr>
            <tr>
                <td>Ruang : </td>
                <td><input type="text" name="ruang" required=""></td>
            </tr>
            <tr>
                <td>Mata Kuliah : </td>
                <td>
                <select name="matkul" required=""> 
                    <option value="1">Pemrogaman Web</option>
                    <option value="2">Metodologi Penelitian</option>
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