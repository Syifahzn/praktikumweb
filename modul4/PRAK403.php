<?php
    $data = [
        ["no" => 1, "nama" => "Ridho", "matkul" => [
            ["matakuliah" => "Pemrograman 1", "sks" => 2],
            ["matakuliah" => "Praktikum Pemrograman 1", "sks" => 1],
            ["matakuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["matakuliah" => "Arsitektur Komputer", "sks" => 3],
        ]],
        ["no" => 2, "nama" => "Ratna", "matkul" => [
            ["matakuliah" => "Basis Data 1", "sks" => 2],
            ["matakuliah" => "Praktikum Basis Data 1", "sks" => 1],
            ["matakuliah" => "Kalkulus", "sks" => 3],
        ]],
        ["no" => 3, "nama" => "Tono", "matkul" => [
            ["matakuliah" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["matakuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["matakuliah" => "Komputasi Awan", "sks" => 3],
            ["matakuliah" => "Kecerdasan Bisnis", "sks" => 3],
        ]],
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
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>

        <?php
        for($i = 0; $i < count($data); $i++){
            $jumlah_sks = 0;
            for($j = 0; $j < count($data[$i]["matkul"]); $j++){
                $jumlah_sks += $data[$i]["matkul"][$j]["sks"];
            }
            $data[$i]["jumlah_sks"] = $jumlah_sks;
            if($data[$i]["jumlah_sks"] < 7) {
                $data[$i]["keterangan"] = "<div style=background-color:#FF0000>Revisi KRS</div>";
            }
            else {
                $data[$i]["keterangan"] = "<div style=background-color:#1D8348>Tidak Revisi";
            }
        }

        for($i = 0; $i < count($data); $i++){
            for($j = 0; $j < count($data[$i]["matkul"]); $j++){
                echo "<tr>";
                if($j == 0){
                    echo "<td>".$data[$i]["no"]."</td>";
                    echo "<td>".$data[$i]["nama"]."</td>";
                    echo "<td>".$data[$i]["matkul"][$j]["matakuliah"]."</td>";
                    echo "<td>".$data[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td>".$data[$i]["jumlah_sks"]."</td>";
                    echo "<td>".$data[$i]["keterangan"]."</td>";
                }
                else{
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>".$data[$i]["matkul"][$j]["matakuliah"]."</td>";
                    echo "<td>".$data[$i]["matkul"][$j]["sks"]."</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>