<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");
    $sql_ID = mysqli_query($konek, "SELECT MAX(ID) From tb_sensor");
    $data_ID = mysqli_fetch_array($sql_ID);
    $ID_akhir = $data_ID['MAX(ID)'];
    $ID_awal = $ID_akhir - 4;
    $tanggal = mysqli_query($konek, "SELECT tanggal from tb_sensor WHERE ID >= '$ID_awal' and ID <= '$ID_akhir' order by id asc");
    $sensor = mysqli_query($konek, "SELECT sensor from tb_sensor WHERE ID >= '$ID_awal' and ID <= '$ID_akhir' order by id asc");

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
 <section class="">
        <div class="container ">
            <div class="w-full px-4">
                <h1 class="font-bold text-4xl text-center my-5 text-white">Grafik Data</h1>
            </div>
            <div class="px-4 w-full">
            <div class="mx-auto rounded-xl shadow-lg  border-emerald-900 p-4 bg-white lg:w-[830px] h-auto ">
                <div class="lg:w-[800px] lg:h-96 ">
                    <canvas id="myChart" >
                    </canvas>
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
                        }]
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
        </div>
    </section>



<!-- <div class="mx-auto text-center">
    <div class="bg-sky-500">
        <h1>Grafik Sensor</h1>
    </div>

</div> -->