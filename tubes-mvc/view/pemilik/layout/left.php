</div>
        <div class="left">
            <i id="home" class= "fa fa-home" onclick="location.href='pemilik'"></i>
            <br>
            <i class= "fa fa-road" onclick="location.href='track'"></i>
            <br>
            <i class= "fa fa-newspaper-o" onclick="location.href='laporan-rangkuman'"></i>
            <div class="down">
                <hr>
                <i id="profil" class= "fa fa-user-circle-o" onclick="location.href='profile'"></i>
                <br>
                <i id="logout" class= "fa fa-sign-out" onclick="location.href='../logout'"> </i>
            </div>
        </div>
    </head>
    <body>
    <script>
        let home = document.getElementById("home").addEventListener("click", toHome);
        function toHome(event){
            location.replace("http://localhost/tubes-mvc/pemilik");
        }
        let logout = document.getElementById("logout").addEventListener("click", logOut);
        function logOut(event){
            location.replace("http://localhost/tubes-mvc/logout");
        }
        // let profil = document.getElementById("profil").addEventListener("click", logOut);
        // function logOut(event){
        //     location.replace("http://localhost/tubes-mvc/pemilik/profile");
        // }
        // let track = document.getElementById("track").addEventListener("click", logOut);
        // function logOut(event){
        //     location.replace("http://localhost/tubes-mvc/pemilik/track");
        // }
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
    margin-top: 20px;
    color: white;
}
.down{
    margin-top: 300px;
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
        <div class="content">