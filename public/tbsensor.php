<?php 
    $konek = mysqli_connect("localhost", "root", "", "websensor");
    $sql1 = mysqli_query($konek, "select * from tb_sensor order by id desc");
    $data1 = mysqli_fetch_array($sql1);
    $kelembaban1 = $data1['sensor'];

    $id = $data1['id'];
    
    $sql2 = mysqli_query($konek, "select * from setpoint order by id desc");
    $data2 = mysqli_fetch_array($sql2);
    $set = $data2['set_point'];

    if($kelembaban1 >= $set){
        $kelembaban = "Lembab";

        $sql1 = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id' ");
    } else if ($kelembaban1 < $set){
        $kelembaban = "Tidak Lembab";

        $sql1 = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id'");
    }
?>
   
<table class="w-full  px-4  mx-auto table-fixed ">
    <thead class=" bg-gray-50 border-b-2 border-gray-200 sticky top-0">
        <tr >
            <!-- <th class="p-3 text-sm font-semibold tracking-wide text-left">No</th> -->
            <th class="p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
            <th class="p-3 text-sm font-semibold tracking-wide text-left">Nilai Sensor</th>
            <th class="p-3 text-sm font-semibold tracking-wide text-left">Keterangan</th>
            <th class="p-3 text-sm font-semibold tracking-wide text-left">Setpoint</th>
        </tr>
    </thead>
    <tbody class="border-b-2 border-gray-100 [&>tr:nth-child(odd)]:bg-emerald-100 ">                         
    <?php 
         $sql = mysqli_query($konek, "Select * from tb_sensor WHERE id % 5 = 0 AND sensor > 0 ORDER BY id DESC");
         $sql3 = mysqli_query($konek, "Select * from setpoint order by ID desc");
         $data3 = mysqli_fetch_array($sql3);
        while ($data = mysqli_fetch_array($sql)){
            echo "<tr>";
            // echo "<td class=\"p-3 text-sm\">".$data['id']."</td>";
            echo "<td class=\"p-3 text-sm\">".$data['tanggal']."</td>";
            echo "<td class=\"p-3 text-sm\">".$data['sensor']."</td>";
            echo "<td class=\"p-3 text-sm\">".$data['keterangan']."</td>";
            echo "<td class=\"p-3 text-sm\">".$data['setpoint']."</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
    





