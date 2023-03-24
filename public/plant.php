<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc");
    $data = mysqli_fetch_array($sql);
    $lembab = $data['sensor'];
    $setpoint = $data['setpoint'];
    $pwm = $data['pwm']; 

    $sql2 = mysqli_query($konek, "select * from setpoint order by id desc");
    $data2 = mysqli_fetch_array($sql2);
    $set = $data2['set_point'];

    if($pwm == 0){
    $plant = "<img src=\"../img/tanpa-air.png\" width = \"1000px\" >";
    } else{
    $plant = "<img src=\"../img/air.gif\" width = \"1000px\" >";
    
    }

    echo $plant;
?>