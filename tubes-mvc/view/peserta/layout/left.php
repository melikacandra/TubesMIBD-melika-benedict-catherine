</div>
        <div class="left">
            <i id="home" class= "fa fa-home"></i>
            <h6>Home</h6>
            <br>
            <i class= "fa fa-line-chart"></i>
            <h6>Progress</h6>
            <br>
            <i class= "fa fa-exchange"></i>
            <h6>Transaksi</h6>
            <br>
            <img src="https://iconsplace.com/wp-content/uploads/_icons/ffffff/256/png/medal-2-icon-18-256.png">
            <h6>Medali</h6>
            <div class="down">
                <hr>
                <i class= "fa fa-user-circle-o"></i>
                <h6>Profil</h6>
                <br>
                <i id="logout" class= "fa fa-sign-out"></i>
                <h6>Log out</h6>
            </div>
        </div>
    </head>
    <body>
        <div class="content">
        <script>
        let home = document.getElementById("home").addEventListener("click", toHome);
        function toHome(event){
            location.replace("http://localhost/tubes-mvc/peserta");
        }
        let logout = document.getElementById("logout").addEventListener("click", logOut);
        function logOut(event){
            location.replace("http://localhost/tubes-mvc/logout");
        }
    </script>
<style>
body{
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
nav{
    float: left;
    margin-top: 0;
}

.header{
    background-color: #085394 ;
    height: 60px;
}
.header h1{
    color: white;
    margin-left: 20px;
    margin-top: 10px;
    font-size:35px;
    }
.left{
    background-color: #073763 ;
    width: 5%;
    height: 89%;
    position: absolute;
    float: left;
}
.left i{
    font-size: 30px;
    margin-left: 20%;
    margin-top: 0px;
    margin-bottom: 5px;
    color: white;
}
.down{
    margin-top: 130px;
}

.tambah-baru{
    background-color: #bbd7ff;
    margin-left: 10%;
    margin-top: 50px;
    margin-right: 70%;
    height: 200px;
    border-radius: 10%;

}

.tambah-baru i{
   margin-left: 35%;
   font-size: 70px;
}

.tambah-baru p{
    font-size: 20px;
 }

.tambah-baru i,p{
    color: #2b78e4;
    text-align: center;
    margin-top: 10%;
} 

.form-tambah{
    margin-left: 20%;   
    margin-right: 20%;
    background-color: #dddddd;
    height: 200px;
}
.judul{
    background-color: #073763;
    text-align: center;
    color: orange;
    font-size: 12px;
    margin-right: 38%;
    margin-left: 38%; 
    margin-top: 10px; 
    padding-top: 2px;
    padding-bottom: 10px;
    height: 50px;
    border-radius: 10px;
}
img{
    width: 35px;
    height: 35px;
    margin-left: 10px;
    margin-top: 20px;
}
h6{
    margin-bottom: 0px;
    margin-top: 0px;
    text-align: center;
    color: white;
    padding: 0;
}
</style>        