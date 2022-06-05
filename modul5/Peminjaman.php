<?php 
require('./Model.php');
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<html>
<head>
    <title>Data Peminjaman</title>
    <style>
        table{
            border-collapse: collapse;
        }
        tr{
            border: black;
        }
        th{
            background-color: #C0C0C0;
        }
        \
    </style>
</head>
<body>
    <table border = "2">
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilpeminjaman();
            ?>
        </tbody>
    </table>
    <br>
    <a href="formpeminjaman.php"><button>Tambah Data Peminjaman</button></a> <br></br>
    
</body>
</html>