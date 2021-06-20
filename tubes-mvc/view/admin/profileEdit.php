<?php
    include 'layout/header.php'
?>
<h1> <i class="fa fa-user-circle-o"></i> Profil</h1>
<?php
    include 'layout/left.php'
?>
<link rel="stylesheet" href="view/admin/profile.css">
    <div class="tempat">
        <div class="head-id2">  
            <i id="foto2" class="fa fa-user-circle-o"></i>
           <table>
               <tr>
                   <th>Nama :</th>
                   <td><input type="text" value="<?php echo $user->getNama() ?>"></td>
               </tr>
               <tr>
                   <th>Nama Pengguna :</th>
                   <td><input type="text" value="<?php echo $user->getUsername() ?>"></td>
               </tr>
               <tr>
                   <th>Email :</th>
                   <td><input type="text" value="<?php echo $user->getEmail() ?>"></td>
               </tr>
           </table>
        </div>
    <hr>
    <br>
    <div class="main-id">
        <table>
            <tr>
                <th>Alamat :</th>
                <td><input type="text" value= "<?php echo $user->getAlamat() ?>"></td>
            </tr>
            <tr>
                <th>Kontak :</th>
                <td><input type="number" value="<?php echo $user->getKontak() ?>"> </td>
            </tr>
            <tr>
                <th>Tanggal Lahir :</th>
                <td><input type="date" value="<?php echo $user->getTgl_lahir() ?>"></td>
            </tr>
            <tr>
                <th>Jenis Kelamin :</th>
                <?php 
                     $gender = $user->getGender();
                     if($gender === 'P'){
                         ?>
                         <td><input type="radio" checked="checked"><label>Perempuan</label></td>
                         <td><input type="radio" ><label>Laki-laki</label></td><?php
                     }
                     else{
                        ?>
                        <td><input type="radio" ><label>Perempuan</label></td>
                        <td><input type="radio" checked="checked"><label>Laki-laki</label></td>
                        <?php
                     }
                ?>
                <!-- <td><input type="radio" checked="checked"><label>Perempuan</label></td>
                <td><input type="radio" ><label>Laki-laki</label></td> -->
            </tr>
            <tr>
                <th>Kata Sandi Awal :</th>
                <td><input type="password"></td>
            </tr>
            <tr>
                <th>Kata Sandi Baru :</th>
                <td><input type="password"></td>
            </tr>
            <tr>
                <th>Konfirmasi Kata Sandi Baru :</th>
                <td><input type="password"></td>
            </tr>
        </table>
    </div>
    
    
    <button id="simpan" type="button">Simpan</button>
    </div>
    <!---JAVASCRIPT--->
    <script>
        let kembali = document.getElementById("simpan");
        kembali.addEventListener("click", onClick);
        console.log(kembali);
        function onClick(event){
            console.log(location);
            location.replace("http://localhost/tubes-mvc/admin/profile");
        }
    </script>
      <!---STYLE--->
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
<?php
    include 'layout/footer.php'
?>
