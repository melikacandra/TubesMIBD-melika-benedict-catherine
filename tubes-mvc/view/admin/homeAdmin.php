<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="view/admin/styles.css">
        
        <title>Home Admin</title>
        <div class="nav-bar">
            <span>
            <h1>Selamat Datang, Admin <?php echo $_SESSION['nama']?></h1>
            
            <button type="button" onclick="location.href='logout'"> <i class="fa fa-sign-out"></i> Log Out</button>
            <button type="button" onclick="location.href='admin/profile'"> <i class="fa fa-user-circle-o"></i>Profil</button>    
            </span>
        </div>
    </head>
    <body>
        <div class =menu id=track>
            <div class=menu-button>
                <i class="fa fa-money" onclick="location.href='Track.php'"></i>
                <p>Status Pembayaran</p>
            </div>
            <div class=menu-button onclick="location.href='laporan-rangkuman.php'">
                <i class="fa fa-road"></i>
                <p>Status Marathon</p>
            </div>
        </div>
        </div>
             <div class=menu-middle onclick="location.href='laporan-rangkuman.php'">
                <i class="fa fa-trophy"></i>
                <p>Status Medali</p>
            </div>
        
    </body>
</html>