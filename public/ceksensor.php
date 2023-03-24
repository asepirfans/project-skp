<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");
    $sql = mysqli_query($konek, "select * from tb_sensor order by id desc");
    $data = mysqli_fetch_array($sql);
    $nilai = $data['sensor'];

    echo $nilai;
?>