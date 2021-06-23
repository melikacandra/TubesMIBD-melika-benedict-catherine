<div class="left">
            <a id="home" href="#"><i class= "fa fa-home"></i></a>
            <br>
            <a id="cekTransaksi" href="#"><i class= "fa fa-money"></i></a>
            <br>
            <a id="cekMarathon" href="#"><i class= "fa fa-road"></i></a>
            <br>
            <a id= "cekMedali" href="#"><i class= "fa fa-trophy"></i></a>
            <div class="down">
                <hr>
                <a id="profil" href="#"><i class= "fa fa-user-circle-o"></i></a>
                <br>
                <a id="logout" href="#"><i class= "fa fa-sign-out"></i></a>
            </div>
        </div>
        <script>
        let home = document.getElementById("home").addEventListener("click", toHome);
        function toHome(event){
            location.replace("http://localhost/tubes-mvc/admin");
        }
        let logout = document.getElementById("logout").addEventListener("click", logOut);
        function logOut(event){
            location.replace("http://localhost/tubes-mvc/logout");
        }
        let profil = document.getElementById("profil").addEventListener("click", cekProfil);
        function cekProfil(event){
            location.replace("http://localhost/tubes-mvc/admin/profile");
        }
        let marathon = document.getElementById("cekMarathon").addEventListener("click", cekMarathon);
        function cekMarathon(event){
            location.replace("http://localhost/tubes-mvc/admin/cekMarathon");
        }
        let transaksi = document.getElementById("cekTransaksi").addEventListener("click", cekTransaksi);
        function cekTransaksi(event){
            location.replace("http://localhost/tubes-mvc/admin/cekPembayaran");
        }
        let medali = document.getElementById("cekMedali").addEventListener("click", cekMedali);
        function cekMedali(event){
            location.replace("http://localhost/tubes-mvc/admin/cekMedali");
        }
    </script>
