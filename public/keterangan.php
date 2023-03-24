<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc");
    $data = mysqli_fetch_array($sql);
    $datas = $data['sensor'];
    $setpoint = $data['setpoint'];
    $pwm = $data['pwm'];    
    $id = $data['id'];
    $sql2 = mysqli_query($konek, "select * from setpoint order by id desc");
    $data2 = mysqli_fetch_array($sql2);
    $set = $data2['set_point'];

    if($pwm == 0){
        $kelembaban = "Lembab";
        $sql = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id' ");
    } else if($pwm > 0){
        $kelembaban = "Tidak Lembab";
        $sql = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id'");
    }
    $keterangan = $data['keterangan'];
    // if($datas >= $setpoint){
    //     $kelembaban = "Lembab";
    //     $sql = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id' ");
    // } else if ($datas < $setpoint){
    //     $kelembaban = "Tidak Lembab";
    //     $sql = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id'");
    // }
    // $keterangan = $data['keterangan'];

    echo $keterangan;
?>