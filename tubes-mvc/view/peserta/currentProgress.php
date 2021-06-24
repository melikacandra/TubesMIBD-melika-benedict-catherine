<!DOCTYPE html>
<html>
	<head>
		<title>Current Progress</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <Link href="styleCurrentProgress.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<ul>
			<li><a class="fa fa-home" href="homePeserta.php"></a></li>
			<li><a href="homePeserta.php">Home</a></li>
			<li><a class="fa fa-line-chart" href="progress.php"></a></li>
			<li><a href="progress.php">Progress</a></li>
			<li><a class="fa fa-exchange" href="transaksi.php"></a></li>
			<li><a href="transaksi.php">Transaksi</a></li>
			<li><a href="mendali.php"><img src="assets/mendali.png" width="18" height="18"></a></li>
			<li><a href="mendali.php">Mendali</a></li>
			<li><a class="fa fa-user-circle-o" href="#"></a></li>
			<li><a href="#">Profil</a></li>
			<li><a class="fa fa-sign-out" href="#"></a></li>
			<li><a href="#">Log out</a></li>
		</ul>

		
		<div class="sebelah">
			<i class="fa fa-line-chart"></i>
			<h1>Progress</h1>
		</div>

		<div>
		  	<div class="main">
		  		<table class="atas12">
		  			<tr>
		  				<td>
                <canvas id="tempuh"></canvas>
              </td>
		  			</tr>
		  			<tr>
						<td> Progress 0%</td>
		  			</tr>
		  			<tr>
		  				<td>Jarak Tempuh: 0 km</td>
		  			</tr>

		  			<tr>
		  				<td><button class="btn1" id="myBtn"> Tambah Jarak</button></td>
		  			</tr>
		  		</table>
		  		<div id="myModal" class="modal">
				  	<div class="modal-content">
				   		<span class="close">&times;</span>
			   			<h3><b>Tambah Jarak</b></h3>
			    		<p>Tambah Jarak: </p>
				    	<input type="text" name="jarak">
				    	<br><br>
				    	<a href="currentProgress"><button>Submit</button></a>
				  	</div>
				</div>
		  	</div>

		  	<div class="right">
			    <h3>Kiyomizu Dera, Jepang</h3>
			    <img src="assets/kiyomizu.jpg">
			    <br><br>
			    
			</div>
		</div>
		<script>
			var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
let genderChart = document.getElementById('tempuh').getContext('2d');

    let genderPopChart = new Chart(genderChart, {
        type:'bar',
        data:{
            labels: ['Progress'],
            datasets: [{
                label: 'progress track',
                data:[
                   2.5,
                ],
                backgroundColor:[
                    'blue',
                ],
            }],
        },
        options: {
             indexAxis: 'y',
        }
    });
		</script>
	</body>
	<style>
		body {
  margin: 0;
  background-color: #9fc5f8;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 7%;
  background-color: #073763;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: white;
  padding: 8px 15px;
  text-decoration: none;
}

.fa-home{
  padding-top: 30%;
}


.fa-user-circle-o{
  padding-top: 250%;
}

a:hover{
  color: lightblue;
}

.sebelah{
  margin-left: 7%;
  padding-left: 10px;
  padding-bottom: 20px;
  background-color: #2b78e4;
  padding-left: 15px;
  
}

h1{
  display: inline-flex;
  padding-left: 10px;
  margin-bottom: 10px;
  color: white;
}

.sebelah .fa-line-chart{
  font-size: 40px;
  color: white;
}


.main {
  float: left;
  width: 45%;
  height: 14cm;
  padding: 0 20px;
  margin:5% 5% 10% 13%;
  color: #2b78e4;
}

.main .atas12{
  font-size: 30px;

}

.right {
  background-color: #073763;
  margin-top: 2%;
  float: left;
  width: 30%;
  color: #f1c232;
  text-align: center;
}

.right img{
  width: 70%;
}


/*popup*/
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  color: black;
}

/* Modal Content */
.modal-content {
  margin: auto;
  padding:1% 2% 1% 2%; 
  border: 1px solid #888;
  width: 25%;
}

.modal-content button{
  background-color: #009e0f;
  color: #f1c232;
  border:none;
  width: 20%;
  height: 30px;
  margin-left: 40%;
}

.modal-content h3{
  margin-left: 20%;
}
	</style>
</html>