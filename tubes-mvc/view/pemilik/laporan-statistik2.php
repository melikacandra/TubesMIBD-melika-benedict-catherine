<?php
    include 'layout/header.php'
?>
<h1> <i class="fa fa-newspaper-o"></i> Laporan</h1>
<?php
    include 'layout/left.php'
?>
<link rel="stylesheet" href="laporan.css">
<div class="sub"  onclick="location.href='laporan-rangkuman'">Rangkuman</div>
<div class="sub" onclick="location.href='laporan-statistik'">Statistik</div>

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
<style>
    .content{
    margin-left: 5%;
}

.sub{
    background-color: lightblue;
    float: left;
    padding-left: 22%;
    padding-right: 22%;
    border-style: solid;
    border-width: 1px;
    border-radius: 5px;
    border-color: black;
    
    
}
.info{
    height: 200px;
    width: 300px;
    margin-left: 30px;
    margin-top: 30px;
    text-align: center;
    float:left;
    
}
.value{
    margin: auto;
    background-color: purple;
    height: 70px;
    width: 200px;
    padding: 2px;
    color: white;
    font-size: 20px;
}
.value2{
    margin: auto;
    background-color: rgb(162, 1, 255);
    height: 70px;
    width: 200px;
    padding: 2px;
    color: white;
    font-size: 20px;
}

.value3{
    margin: auto;
    background-color: blue;
    height: 70px;
    width: 200px;
    padding: 2px;
    color: white;
    font-size: 20px;
}

.value4{
    margin: auto;
    background-color: chocolate;
    height: 70px;
    width: 200px;
    padding: 2px;
    color: white;
    font-size: 20px;
}
.value5{
    margin: auto;
    background-color: maroon;
    height: 70px;
    width: 200px;
    padding: 2px;
    color: white;
    font-size: 20px;
}
.stat{
    margin: auto;
    background-color: lightblue;
    height: 200px;
    width: 200px;
    padding: 2px;
    color: white;
    font-size: 20px;
}
table{
    background-color: rgb(0, 113, 219);
    color: white;
    margin: auto;
}
th{
    border-style: solid;
    border-color: navy;
    border-width: 1px;
}
</style>