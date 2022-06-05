<?php 
require('./Model.php');
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>
<html>
<head>
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
    </style>
    <title>Member Pustakawan</title>
</head>
<body>
    <table border = "2">
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();
            ?>
        </tbody>
    </table>
    <br>
    <a href="formmember.php"><button>Tambah Data</button></a> <br></br>
</body>
</html>