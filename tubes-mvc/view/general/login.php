<!DOCTYPE html>
<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <title>Login Virtual Marathon</title>
        <link rel="stylesheet" href="view/general/login.css">
    </head>
    <body>
        <div class="setter">
            <center>
            <form method = "POST" action="login_database" >
                <br>
                <h1>Virtual Marathon 2021</h1>
                <br><br>
                <label>Username : </label>
                <input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
                <br>
                <br>
                <label>Password : </label>
                <input type="password" name="password" placeholder="masukkan password" required="">
                <br>
                <br>
                <button type="submit">Login</button>
                <br>
                <br>
            </form>
            <a style="color: white;" href="signup">Belum punya akun?<a>
            <center>
            <?php if(isset($_GET['pesan'])){?>
                <label><?php echo $_GET['pesan']; ?></label>
            <?php } ?>
            
        </div>
        
    </body>
</html>