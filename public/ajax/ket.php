<?php 
  
    $konek = mysqli_connect("localhost", "root", "", "websensor");
    $keyword = $_GET["keyword"];
    $sql2 = mysqli_query($konek, "SELECT * from tb_sensor WHERE tanggal LIKE '$keyword' OR sensor LIKE '%$keyword%' OR keterangan LIKE '$keyword'");
    


?>
 <table class="w-full  px-4  mx-auto table-fixed">
        <thead class=" bg-gray-50 border-b-2 border-gray-200 sticky top-0">
            <tr class="">
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Tanggal</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Nilai Sensor</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-left">Keterangan</th>
            </tr>
        </thead>
        <tbody class="border-b-2 border-gray-100 [&>tr:nth-child(odd)]:bg-emerald-100">                         
        <?php 
        
        $sql1 = mysqli_query($konek, "select * from tb_sensor order by id desc");
        $data1 = mysqli_fetch_array($sql1);
        $kelembaban1 = $data1['sensor'];

        $id = $data1['id'];
        
        $sql3 = mysqli_query($konek, "select * from setpoint order by id desc");
        $data3 = mysqli_fetch_array($sql3);
        $set = $data3['set_point'];

        if($kelembaban1 >= $set){
            $kelembaban = "Lembab";

            $sql1 = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id' ");
        } else if ($kelembaban1 < $set){
            $kelembaban = "Tidak Lembab";

            $sql1 = mysqli_query($konek, "UPDATE tb_sensor SET keterangan='$kelembaban' where id ='$id'");
        }
        
            $sql = mysqli_query($konek, "Select * from tb_sensor order by ID desc");
            while ($data = mysqli_fetch_array($sql2)){
                echo "<tr>";
                echo "<td class=\"p-3 text-sm\">".$data['tanggal']."</td>";
                echo "<td class=\"p-3 text-sm\">".$data['sensor']."</td>";
                echo "<td class=\"p-3 text-sm\">".$data['keterangan']."</td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>