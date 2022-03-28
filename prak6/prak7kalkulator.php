<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <h2>Form Hitung</h2>
    <form action="act_prak7kalkulator.php" method="post">
        Angka 1
        <input type="number" name="angka1">
        <br> Angka 2
        <input type="number" name="angka2">
        <br>
        Operator
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
            <option value="modulus">%</option>
        </select>
        <br><br>
        <input type="submit" value="Hitung">
    </form>

    
</body>
</html>