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
    <h2>Track Paling Diminati</h2>
    <div class="value">
        <h3>Gunung Fuji</h3>
    </div>
</div>
<div class="info">
    <h2>Umur Peserta Terbanyak</h2>
    <div class="value2">
        <h3>41 - 50 Tahun</h3>
    </div>
</div>
<div class="info">
    <h2>Komposisi Gender</h2>
    <div class="value3">
        <h3>3:5</h3>
    </div>
</div>
<div class="info">
    <h2>Peraih Medali Terbanyak</h2>
    <div class="value4">
        <h3>Benedict</h3>
    </div>
</div>
<div class="info">
    <h2>Persentase Track Selesai</h2>
    <div class="value5">
        <h3>55%</h3>
    </div>
</div>

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



<?php
    include 'layout/footer.php'
?>
