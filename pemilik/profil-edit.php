<?php
    include 'layout/header.php'
?>
<h1> <i class="fa fa-user-circle-o"></i> Profil</h1>
<?php
    include 'layout/left.php'
?>
<link rel="stylesheet" href="profil.css">
    <div class="tempat">
        <div class="head-id2">  
            <i id="foto2" class="fa fa-user-circle-o"></i>
           <table>
               <tr>
                   <th>Nama :</th>
                   <td><input type="text" value="Ni Luh Melika Candra"></td>
               </tr>
               <tr>
                   <th>Nama Pengguna :</th>
                   <td><input type="text" value="melika"></td>
               </tr>
               <tr>
                   <th>Email :</th>
                   <td><input type="text" value="6181901065@student.unpar.ac.id"></td>
               </tr>
           </table>
        </div>
    <hr>
    <br>
    <div class="main-id">
        <table>
            <tr>
                <th>Alamat :</th>
                <td><input type="text" value="Jl. PBW No.10"></td>
            </tr>
            <tr>
                <th>Kontak :</th>
                <td><input type="number" value="0823928398291"> </td>
            </tr>
            <tr>
                <th>Tanggal Lahir :</th>
                <td><input type="date" value="10/05/2001"></td>
            </tr>
            <tr>
                <th>Jenis Kelamin :</th>
                <td><input type="radio" checked="checked"><label>Perempuan</label></td>
                <td><input type="radio" ><label>Laki-laki</label></td>
            </tr>
            <tr>
                <th>Kata Sandi Awal :</th>
                <td><input type="password" value="Jl. PBW No.10"></td>
            </tr>
            <tr>
                <th>Kata Sandi Baru :</th>
                <td><input type="password" value="Jl. PBW No.10"></td>
            </tr>
            <tr>
                <th>Konfirmasi Kata Sandi Baru :</th>
                <td><input type="password" value="Jl. PBW No.10"></td>
            </tr>
        </table>
    </div>
    <button>Simpan</button>
    </div>
<?php
    include 'layout/footer.php'
?>
