<?php
    $data = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65 ],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM MODUL 4</title>

    <style>
        table {
            border-collapse: collapse;
        }
        table, th, tr, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            width: 100px;
        }
        th {
            background-color: #D5DBDB;
            color: black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>

        <?php
        for($i = 0; $i < count($data); $i++){
            $data[$i]["nilai_akhir"] = $data[$i]["uts"] * 0.4 + $data[$i]["uas"] * 0.6;
            if($data[$i]["nilai_akhir"] >= 80){
                $data[$i]["huruf"] = "A";
            }
            elseif($data[$i]["nilai_akhir"] >= 70 && $data[$i]["nilai_akhir"] <= 79){
                $data[$i]["huruf"] = "B";
            }
            elseif($data[$i]["nilai_akhir"] >= 60 && $data[$i]["nilai_akhir"] <= 69){
                $data[$i]["huruf"] = "C";
            }
            elseif($data[$i]["nilai_akhir"] >= 50 && $data[$i]["nilai_akhir"] <= 59){
                $data[$i]["huruf"] = "D";
            }
            elseif($data[$i]["nilai_akhir"] < 50){
                $data[$i]["huruf"] = "E";
            }
        }

        for($i = 0; $i < count($data); $i++){
            echo "<tr>";
            echo "<td>".$data[$i]["nama"]."</td>";
            echo "<td>".$data[$i]["nim"]."</td>";
            echo "<td>".$data[$i]["uts"]."</td>";
            echo "<td>".$data[$i]["uas"]."</td>";
            echo "<td>".$data[$i]["nilai_akhir"]."</td>";
            echo "<td>".$data[$i]["huruf"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>