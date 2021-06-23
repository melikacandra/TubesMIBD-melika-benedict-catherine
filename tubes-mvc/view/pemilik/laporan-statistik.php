<?php
    include 'layout/header.php'
?>
<h1> <i class="fa fa-newspaper-o"></i> Laporan</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<?php
    include 'layout/left.php'
?>
<link rel="stylesheet" href="laporan.css">
<div class="sub"  onclick="location.href='laporan-rangkuman'">Rangkuman</div>
<div class="sub" onclick="location.href='laporan-statistik'">Statistik</div>

<div class="info">
    <h2>Jenis Kelamin</h2>
    <div class="stat">
    <canvas id="genderChart"></canvas>
    </div>
    <table>
        <tr>
            <th>Laki-laki</th>
            <th>Perempuan</th>
        </tr>
        <tr>
            <td>120</td>
            <td>150</td>
        </tr>    
    </table>
</div>

<div class="info">
    <h2>Umur</h2>
    <div class="stat2">
    <canvas id="ageChart"></canvas>
    
    </div>
    
    <table>
        <tr>
            <th>Umur</th>
            <th>Jumlah</th>
        </tr>
        <tr>
            <td>1-20</td>
            <td>150</td>
        </tr>
        <tr>
            <td>21-40</td>
            <td>100</td>
        </tr> 
        <tr>
            <td>41-60</td>
            <td>70</td>
        </tr>  
        <tr>
            <td>>60</td>
            <td>10</td>
        </tr>     
    </table>
</div>

<div class="info">
    <h2>Peminat Track</h2>
    <div class="stat2">
    <canvas id="trackChart"></canvas>
    </div>
    <table>
        <tr>
            <th>Track</th>
            <th>Peminat</th>
        </tr>
        <tr>
            <td>Sungai Nil</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Kiyomizu Dera</td>
            <td>150</td>
        </tr>
        <tr>
            <td>Gunung Fuji</td>
            <td>200</td>
        </tr>
        <tr>
            <td>Piramida Giza</td>
            <td>175</td>
        </tr>                            
    </table>
</div>
<script>
    //Menampilkan Chart Gender
    let genderChart = document.getElementById('genderChart').getContext('2d');

    let genderPopChart = new Chart(genderChart, {
        type:'pie',
        data:{
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Populasi',
                data:[
                    120,
                    150,
                ],
                backgroundColor:[
                    'blue',
                    'pink'
                ],
            }],
        }
    });

    //Menampilkan Chart Umur
    let ageChart = document.getElementById('ageChart').getContext('2d');

    let agePopChart = new Chart(ageChart, {
        type:'bar',
        data:{
            labels: ['1-20', '21-40', '41-60', '>60'],
            datasets: [{
                label: 'Populasi',
                data:[
                    150,
                    100,
                    70,
                    10,
                ],
                backgroundColor:[
                    'purple',
                    'blue',
                    'orange',
                    'yellow',
                ],
            }],
        },
        options: {
             indexAxis: 'y',
        }
    });
    //Menampilkan Chart Track
    let trackChart = document.getElementById('trackChart').getContext('2d');

let trackPopChart = new Chart(trackChart, {
    type:'bar',
    data:{
        labels: ['Sungai Nil', 'Kiyomizu Dera', 'Gunung Fuji', 'Piramida Giza'],
        datasets: [{
            label: 'Populasi',
            data:[
                100,
                150,
                200,
                175,
            ],
            backgroundColor:[
                'blue',
                'brown',
                'pink',
                'yellow',
            ],
        }],
    },
    // options: {
    //      indexAxis: 'y',
    // }
});
</script>


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
    /* background-color: lightblue; */
    height: 300px;
    width: 300px;
    padding: 2px;
    color: white;
    font-size: 20px;
}
.stat2{
    /* margin: auto; */
    /* background-color: lightblue; */
    height: 200px;
    width: 330px;
    padding: 0px;
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
