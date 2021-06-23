<?php
    include 'layout/header.php'
?>
<h1> <i class="fa fa-user-circle-o"></i> Profil</h1>
<?php
    include 'layout/left.php'
?>
<link rel="stylesheet" href="profil.css">
    <div class="tempat">
    <div class="head-id">  
            <i id="foto" class="fa fa-user-circle-o"></i>
            <p><u><b><?php echo $user->getUsername() ?></b></u></p>
            <p><?php echo $user->getUsername() ?></p>
            <p><?php echo $user->getEmail() ?></p>
        </div>
    <hr>
    <div class="main-id">
        <table>
            <tr>
                <th>Alamat</th>
                <td><?php echo $user->getAlamat() ?></td>
            </tr>
            <tr>
                <th>Kontak</th>
                <td><?php echo $user->getKontak() ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?php echo $user->getTgl_lahir() ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $user->getGender() ?></td>
            </tr>
        </table>
    </div>
    <button type="button" onclick="location.href='profile/edit'">Edit Profile</button>
    </div>
<?php
    include 'layout/footer.php'
?>
<style>
.content{
    margin-left: 5%;
    width: 95%;
    height: 100%;
}
body{
    background-color: #9fc5f8;
}

.tempat{
    background-color: whitesmoke;
    margin: auto;
    margin-top: 20px;
    width: 700px;
    height: 550px;
}

#foto{
    font-size: 100px;
    float: left;
    margin-left: 12%;
    margin-right: 20px;
}
#foto2{
    font-size: 100px;
    float: right;
    margin-right: 12%;
}
.head-id p{
    margin: 0;
    text-align: left;
    color: black;
}
p > u{
    font-size: 25px;
}
.head-id{
       padding-top: 40px;
       height: 20%;
}
table{
    margin-left: 8%;
    margin-top: 10px;
    text-align: left;
    margin-bottom: 50px;
}
.head-id2{
    padding-top: 40px;
    height: 20%;
}
th, td{
    padding: 5px;
}
button{
   margin-left: 80%;
   background-color: #f9cb9c;
   padding: 10px;
}
</style>