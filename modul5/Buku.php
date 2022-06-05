<?php 
require('./Model.php');
if (isset($_GET['id_buku']))
{
    hapusbuku($_GET['id_buku']);
}
?>

<html>
<head>
    <title>Buku Pustakawa</title>
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
</head>

<body>
    <table border = "2">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilbuku();
            ?>
        </tbody>
    </table>
    <br>
    <a href="formbuku.php"><button>Tambah Buku</button></a>
</body>
</html>