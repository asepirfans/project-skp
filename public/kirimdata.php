<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");

    $lembab = $_GET['l'];
    $setpoint = $_GET['s'];
    $pwm = $_GET['p'];
    echo $lembab;
    echo $setpoint;

    if($lembab > 0){
        $simpan = mysqli_query($konek, "INSERT INTO tb_sensor(sensor,setpoint,pwm)  values ('$lembab', '$setpoint', '$pwm') ");
    }

    if($simpan){
        echo "Berhasil dikrim";
    }else
        echo "GAGAL dikirim"
?>