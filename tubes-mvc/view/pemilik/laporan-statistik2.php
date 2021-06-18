<?php
    include 'layout/header.php'
?>
<h1> <i class="fa fa-newspaper-o"></i> Laporan</h1>
<?php
    include 'layout/left.php'
?>
<link rel="stylesheet" href="laporan.css">
<div class="sub">Rangkuman</div>
<div class="sub">Statistik</div>

<div class="info">
    <h2>Statistik Penyelesaian</h2>
    <div class="stat">
    ini gambar statistik
    </div>
    <table>
        <tr>
            <th>Track Selesai</th>
            <th>Track Belum Selesai</th>
        </tr>
        <tr>
            <td>null</td>
            <td>null</td>
        </tr>    
    </table>
</div>

<div class="info">
    <h2>Scoreboard Medali</h2>

    <table>
        <tr>
            <th>No</th>
            <th>IdPeserta</th>
            <th>Nama</th>
            <th>Medali</th>
        </tr>
        <tr>
            <td>null</td>
            <td>null</td>
            <td>null</td>
            <td>null</td>
        </tr>  
    </table>
</div>




<?php
    include 'layout/footer.php'
?>
