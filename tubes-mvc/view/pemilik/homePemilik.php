
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="view/pemilik/styles.css">
        
        <title>Home Pemilik</title>
        <div class="nav-bar">
            <span>
            <h1>Halo, Pemilik <?php echo $_SESSION['nama']?></h1>
            
            <button type="button" onclick="location.href='logout'"> <i class="fa fa-sign-out"></i> Log Out</button>
            <button> <i class="fa fa-user-circle-o"></i>Profil</button>    
            </span>
        </div>
    </head>
    <body>
        <div class =menu id=track>
            <div class=menu-button>
                <i class="fa fa-road" onclick="location.href='Track.php'"></i>
                <p>Daftar Track</p>
            </div>
            <div class=menu-button onclick="location.href='laporan-rangkuman.php'">
                <i class="fa fa-newspaper-o"></i>
                <p>Laporan</p>
            </div>
        </div>

    </body>
</html>