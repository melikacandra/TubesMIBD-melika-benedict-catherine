</div>
        <div class="left">
            <a id="home"><i class= "fa fa-home"></i></a>
            <br>
            <i class= "fa fa-money"></i>
            <br>
            <i class= "fa fa-road"></i>
            <br>
            <i class= "fa fa-trophy"></i>
            <div class="down">
                <hr>
                <i class= "fa fa-user-circle-o"></i>
                <br>
                <a id="logout"><i class= "fa fa-sign-out"></i></a>
            </div>
        </div>
    </head>
    <body>
        <div class="content">
    <script>
        let home = document.getElementById("home").addEventListener("click", toHome);
        function toHome(event){
            location.replace("http://localhost/tubes-mvc/admin");
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
    background-color: #2b78e4 ;
    width: 5%;
    height: 100%;
    position: absolute;
    float: left;
}
.left i{
    font-size: 30px;
    margin-left: 20%;
    margin-top: 20px;
    color: white;
}
.down{
    margin-top: 250px;
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

</style>        