<?php
   $user=$_POST['username']; 
   $pass=$_POST['password']; 
?>

<html>
    <head>
        <title>
            Hasil
        </title>
    </head>
    <body>
        <p>
            <b>Username : </b>
            <?php echo $user; ?>
            <br>
            <b>Password : </b>
            <?php echo $pass; ?>
        </p>
    </body>
</html>