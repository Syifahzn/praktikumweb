<form method="POST">
    <div>
        <label for="">Nama: 1</label>
        <input type="text" name="nama[]">
    </div>
    <div>
        <label for="">Nama: 2</label>
        <input type="text" name="nama[]">
    </div>
    <div>
        <label for="">Nama: 3</label>
        <input type="text" name="nama[]">
    </div>
    <button type="submit">Urutkan</button>
</form>

<?php
    $nama = NULL;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['nama']))
        {
            $nama = $_POST['nama'];
        }
        sort($nama);
        foreach($nama as $nama){
            echo $nama."<br/>";
        }    
    }
?>