<?php 
require __DIR__ . '/vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

$konek = mysqli_connect("localhost", "root", "", "websensor");



$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Montoring</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Tanggal</th>
            <th>Nilai</th>
            <th>Sensor</th>
        </tr>';
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

        $sql = mysqli_query($konek, "Select * from tb_sensor order by ID desc");
        while ($data = mysqli_fetch_array($sql)){
            $html .= '<tr>;
             <td>'.$data["tanggal"].'</td>;
             <td>'.$data["sensor"].'</td>;
             <td>'.$data["keterangan"].'</td>;
             </tr>';
        }

$html .='</table>
</body>
</html>';

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("doc", array("Attachment"=>false));

