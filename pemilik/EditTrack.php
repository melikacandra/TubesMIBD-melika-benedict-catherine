<?php
    include 'layout/header.php'
?>
<h1> <i class="fa fa-road"></i> Track</h1>
<?php
    include 'layout/left.php'
?>
 <link rel="stylesheet" href="tambahTrack.css">
<!---Isi content ada disini--->
    <div class="judul">
        <h1>Edit Track</h1>
    </div>
    <div class="form-background"> 
    <form>
            <table>
                <br><br>
                <tr>
                    <td>Nama Track:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Jarak:</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Harga (Rp):</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Deskripsi:</td>
                    <td><textarea></textarea></td>
                </tr>
            </table>
            <div class="upload-gambar">
                <i class="fa fa-pencil-square-o"></i>
            </div>
            <br>
            <div id="tombol">
            <button id="simpan" type="submit">Simpan</button> <button id="kembali">Kembali</button>
            </div>
    </form>
    </div>
<?php
    include 'layout/footer.php'
?>