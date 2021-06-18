<!DOCTYPE html>
<html>
    <head>  
        <title>Form Login Tester Melika</title>
    </head>
    <body>
        <center>
            <form action="logincontroller.php" method = "POST" style="margin-top: 200px;">
                <h1>Selamat Datang di Virtual Marathon</h1>
                <p>Silahkan Login untuk melanjutkan</p>
                <label>Username : </label>
                <input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
                <br>
                <br>
                <label>Password : </label>
                <input type="password" name="password" placeholder="masukkan password" required="">
                <br>
                <br>
                <button type="submit">Masuk</button>
            </form>
            <?php if(isset($_GET['pesan'])){?>
                <label><?php echo $_GET['pesan']; ?></label>
            <?php } ?>
        </center>
    </body>
</html>
