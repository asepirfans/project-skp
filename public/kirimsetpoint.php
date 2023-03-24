<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");

    $sql3 = mysqli_query($konek, "select * from setpoint order by id desc");
    $data3 = mysqli_fetch_array($sql3);
    $set = $data3['set_point'];
    echo $set;
?>