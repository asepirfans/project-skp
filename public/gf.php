<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");
    $sql_ID = mysqli_query($konek, "SELECT MAX(ID) From tb_sensor");
    $data_ID = mysqli_fetch_array($sql_ID);
    $sql_ID2 = mysqli_query($konek, "SELECT MAX(ID) From tb_sensor");
    $data_ID2 = mysqli_fetch_array($sql_ID2);
    $ID_akhir = $data_ID['MAX(ID)'];
    $ID_awal = $ID_akhir - 8;
    $ID_akhir2 = $data_ID2['MAX(ID)'];
    $ID_awal2 = $ID_akhir2 - 10;
    $tanggal = mysqli_query($konek, "SELECT tanggal from tb_sensor WHERE ID >= '$ID_awal' and ID <= '$ID_akhir' AND sensor > 0 order by id asc");
    $sensor = mysqli_query($konek, "SELECT sensor from tb_sensor WHERE ID >= '$ID_awal' and ID <= '$ID_akhir' AND sensor > 0 order by id asc");
    $setpoint = mysqli_query($konek, "SELECT setpoint from tb_sensor WHERE ID >= '$ID_awal' and ID <= '$ID_akhir' AND sensor > 0 order by id asc");
    $tanggal2 = mysqli_query($konek, "SELECT tanggal from tb_sensor WHERE ID >= '$ID_awal2' and ID <= '$ID_akhir2' AND sensor > 0 order by id desc");
    $sensor2 = mysqli_query($konek, "SELECT sensor from tb_sensor WHERE ID >= '$ID_awal2' and ID <= '$ID_akhir2' AND sensor > 0 order by id desc");
    $setpoint2 = mysqli_query($konek, "SELECT setpoint from tb_sensor WHERE ID >= '$ID_awal2' and ID <= '$ID_akhir2' AND sensor > 0 order by id desc");
    // $tanggal2 = mysqli_query($konek, "SELECT tanggal from tb_sensor  order by id desc");
    // $sensor2 = mysqli_query($konek, "SELECT sensor from tb_sensor  order by id desc");

?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="css/style.css">
   <style> @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap'); </style>
   <script type="text/javascript" src="../jquery.min.js"></script>
   <title>title</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
   <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#ceksensor").load("../public/ceksensor.php");
                $("#sensor1").load("../public/tbsensor.php");
                $("#cekpompa").load("../public/pompa.php");
                $("#ceklembab").load("../public/plant.php");                
                $("#keterangan").load("../public/keterangan.php");    
                $("#grafik").load("../public/grafik.php");          
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
                    <a href="#home" class="block font-bold text-lg text-emerald-500 py-4">ProjectIOT</a>
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
                                <a href="./index.php" class="text-base text-slate-900 py-2 mx-8 flex group-hover:text-white group-hover:rounded-lg group-hover:bg-emerald-800 p-3 ">Beranda</a>
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
   
    <!-- <section class="pt-16 pb-16">
        <div class="container">
            <div class="flex flex-wrap justify-center">
                <div class="w-full p-4">
                <h1 class="font-bold text-4xl text-center">Our Group</h1>
                </div>
                <div class="lg:w-1/2">
                    <div id="grafik" class=" bg-slate-300"></div>
                </div>
                <div class="lg:w-1/2">
                    <div id="grafik" class=" bg-sky-500"></div>
                </div>
            </div>
        </div>    
    </section> -->
 <section class="pt-16 pb-16">
        <div class="container ">
            <div class="w-full p-4">
                <h1 class="font-bold text-4xl text-center my-5 text-black">Grafik Data</h1>
            </div>
            <div class="px-5 my-7 w-full" data-aos="fade-down">
                <div class="flex flex-wrap justify-center">
                    <div class="lg:w-[600px]   m-auto lg:1/2 ">
                        <div class="mx-auto rounded-xl shadow-lg  border-emerald-900 p-4 bg-white "> 
                        <h1 class="text-center text-lg font-bold">Real Time</h1>  
                        <canvas id="myChart" ></canvas>
                        </div>
                    </div>
                    <div class="lg:w-[600px]   m-auto lg:1/2 ">
                        <div class="mx-auto my-5 rounded-xl shadow-lg  border-emerald-900 p-4 bg-white ">  
                        <h1 class="text-center text-lg font-bold">Historycal</h1> 
                        <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            

                <script type="text/javascript">
                    var canvas = document.getElementById('myChart')
                    var data = {
                        labels : [
                            <?php 
                                while($data_tanggal = mysqli_fetch_array($tanggal))
                                {
                                echo '"' . $data_tanggal['tanggal'] . '",';
                                }
                            ?>
                        ],
                        datasets : [{
                            label : "sensor",
                            fill: true,
                            lineTension: 0.5,
                            backgroundColor: "rgba(167, 243, 208, 0.5)",
                            borderColor: "rgba(4, 120, 87, 0.5)",
                            pointRadius:5,
                            data : [
                                <?php
                                    while($data_sensor = mysqli_fetch_array($sensor))
                                    {
                                    echo $data_sensor['sensor'] . ',';
                                    }
                                ?>
                            ]
                        },
                        {
                            label : "setpoint",
                            fill: false,
                            lineTension: 0.5,
                            // backgroundColor: "rgba(239, 82, 93, 0.5)",
                            borderColor: "rgba(239, 82, 9, 0.5)",
                            pointRadius:5,
                            data : [
                                <?php
                                    while($data_sensor = mysqli_fetch_array($setpoint))
                                    {
                                    echo $data_sensor['setpoint'] . ',';
                                    }
                                ?>
                            ]
                        }
                    ]
                    };

                    var option = {
                        showLines :true,
                        animation : {duration :0}
                    };

                    var myLineChart = Chart.Line(canvas,{
                        data : data,
                        options : option
                    });

                </script>
                <script type="text/javascript">
                    var canvas = document.getElementById('myChart2')
                    var data = {
                        labels : [
                            <?php 
                                while($data_tanggal = mysqli_fetch_array($tanggal2))
                                {
                                echo '"' . $data_tanggal['tanggal'] . '",';
                                }
                            ?>
                        ],
                        datasets : [{
                            label : "sensor",
                            fill: true,
                            lineTension: 0.5,
                            backgroundColor: "rgba(167, 243, 208, 0.5)",
                            borderColor: "rgba(4, 120, 87, 0.5)",
                            pointRadius:5,
                            data : [
                                <?php
                                    while($data_sensor = mysqli_fetch_array($sensor2))
                                    {
                                    echo $data_sensor['sensor'] . ',';
                                    }
                                ?>
                            ]
                        },
                        {
                            label : "setpoint",
                            fill: false,
                            lineTension: 0.5,
                            // backgroundColor: "rgba(239, 82, 93, 0.5)",
                            borderColor: "rgba(239, 82, 9, 0.5)",
                            pointRadius:5,
                            data : [
                                <?php
                                    while($data_sensor = mysqli_fetch_array($setpoint2))
                                    {
                                    echo $data_sensor['setpoint'] . ',';
                                    }
                                ?>
                            ]
                        }
                    ]
                    };

                    var option = {
                        showLines :true,
                        animation : {duration :0}
                    };

                    var myLineChart = Chart.Line(canvas,{
                        data : data,
                        options : option
                    });

                </script>
            
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({});
    </script>
    <script src="./js/script.js"></script>
</body>
</html>