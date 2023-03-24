<?php 
        if(isset($_POST['submit'])){
            $set_point = $_POST['setpoint'];
            $konek = mysqli_connect("localhost", "root", "", "websensor");
            $sql = mysqli_query($konek, "INSERT INTO setpoint(set_point) values ('$set_point')");
        }
        $konek = mysqli_connect("localhost", "root", "", "websensor");
        $sql2 = mysqli_query($konek, "select * from setpoint order by id desc");
        $data2 = mysqli_fetch_array($sql2);
        $set = $data2['set_point'];

        $sql3 = mysqli_query($konek, "select * from tb_sensor order by id desc");
        $data = mysqli_fetch_array($sql3);
        $setpoint = $data['setpoint'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS AOS -->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <style> @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap'); </style>
    <script type="text/javascript" src="../jquery.min.js"></script>
    <title>Document</title>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ceksensor").load("../public/ceksensor.php");
                $("#sensor1").load("../public/tbsensor.php");
                $("#cekpompa").load("../public/pompa.php");
                $("#ceklembab").load("../public/plant.php");                
                $("#keterangan").load("../public/keterangan.php");    
                $("#grafik").load("../public/grafik.php");          
                $("#setpoint").load("../public/setpoint.php");          
            }, 1000);
        });
    </script>
</head>
<body>
        <!-- start Navbar -->
        <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-4">
                        <a href="#home" class="block font-bold text-lg text-white py-4">ProjectIOT</a>
                    </div>
                    <div class="flex items-center px-4">
                        <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                            <span class="hamburger-line transition duration-300 origin-top-left"></span>
                            <span class="hamburger-line transition duration-300"></span>
                            <span class="hamburger-line transition duration-300 origin-bottom-left"></span>
                        </button>
                        <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full
                        lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none ">
                            <ul class="block lg:flex">
                                <li class="group">
                                    <a href="./index.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Beranda</a>
                                </li>
                                <li class="group">
                                    <a href="./monitoring.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Monitoring</a>
                                </li>
                                <li class="group">
                                    <a href="./tabel.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Tabel</a>
                                </li>
                                <li class="group">
                                    <a href="./gf.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Grafik</a>
                                </li>
                                <li class="group">
                                    <a href="#group" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3">Group</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navbar -->


    <!-- monitoring -->
    <section id="monitoring" class="pt-10 pb-10 bg-cover bg-center" style="background-image:url(../img/hijau.jpg);">
    <br>
        <div class="container">
            <div class="flex flex-wrap">
                <!-- <div class="w-full px-4">
                    <h1 class="font-bold text-4xl text-center my-5 text-white">Monitoring</h1>
                </div> -->
                <div class="w-full self-end lg:w-1/2 mt-10 ">
                        <div class=" my-5 mx-auto mb-10 w-auto h-auto rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group " data-aos="fade-down" data-aos-duration="1000">
                                <h1 class="w-full text-center font-semibold text-3xl group-hover:text-white">Monitoring</h1>
                        </div>
                    
                    <!-- <div class="w-full h-24 mx-auto rounded-xl shadow-lg  border-emerald-200 p-3 bg-white  group ">
                        <form action="" method="post" class="relative">
                            <input type="text" name="setpoint" placeholder="Masukan Setpoint" autocomplete="off" class="border-2 rounded-lg p-1 w-full">
                            <button type="submit" name="submit" value="submit" class="absolute my-10 -ml-[65px] rounded-lg border-2 bg-emerald-600 text-white p-1">Simpan</button>
                        </form>
                    </div> -->
                    <div class="px-4  w-full flex flex-wrap justify-center">
                        <div class="p-4  lg:w-1/2 " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                            <div class=" mx-auto w-44 h-44 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                            <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Setpoint
                            </h3>
                            <p class="font-bold text-center my-4 text-[50px] text-slate-900 group-hover:text-white">
                                <span id="setpoint"></span>
                            <!-- <?php
                            // echo $setpoint;
                            ?> -->
                            </p>
                            </div>
                        </div>
                        <div class="p-4  lg:w-1/2 " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                            <div class=" mx-auto w-44 h-44 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                            <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Kelembaban
                            </h3>
                            <p class="font-bold text-center my-4 text-[50px] text-slate-900 group-hover:text-white"><span id="ceksensor"></span></p>
                            </div>
                        </div>
                        <div class="p-4  lg:w-1/2 " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="700">
                            <div class=" mx-auto w-44 h-44 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                            <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Pompa
                            </h3>
                            <p class="font-bold text-center my-4 text-[50px] text-slate-900 group-hover:text-white"><span id="cekpompa"></span></p>
                            </div>
                        </div>
                        <div class="p-4  lg:w-1/2 " data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800">
                            <div class=" mx-auto w-72 h-44 rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group ">
                            <h3 class="text-center font-bold text-[20px] text-slate-800 group-hover:text-white">Keterangan
                            </h3>
                            <p class="font-bold text-center text-[40px] text-slate-900 group-hover:text-white"><span id="keterangan"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full self-center lg:w-1/2 ">
                    <div class="p-4">    
                        <div class=" my-5 mx-auto w-auto h-auto rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group " data-aos="fade-down" data-aos-duration="1000">
                                <h1 class="w-full text-center font-semibold text-3xl group-hover:text-white">Visualisasi</h1>
                        </div>
                        <div class=" mx-auto w-full lg:w-full  rounded-xl shadow-lg  border-emerald-200 p-4 bg-white hover:bg-emerald-800 group " data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                            <div id="ceklembab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
    <script src="./js/script.js"></script>


</body>
</html>

