<?php
//ini template admin nanti yang bersangkutan silahkan edit
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
    </head>
</html>
<body>
    <h1> 
    Halo Selamat datang Admin
    <?php 
    echo $_SESSION['nama'];
    ?> </h1>

<br>
	<a href="../logout.php">Klik disini untuk logout.</a>


</body>