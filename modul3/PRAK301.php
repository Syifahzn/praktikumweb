<form method="POST" action="">
    <div>
        <label for="">Jumlah Peserta: </label>
        <input type="text" name="peserta">
    </div>
    <button type="submit">Cetak</button>
</form>

<?php
    $peserta = NULL;
    $i =1;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['peserta']))
        {
            $peserta = $_POST['peserta'];
        }

        while($i <= $peserta){
            if($i % 2 == 0){
                echo "<font color='#009933'><h2>Peserta ke-".$i."</br></h2></font>";
            }
            else{
                echo "<font color='#ff0000'><h2>Peserta ke-".$i."</br></h2></font>";
            }
            $i++;
        }
    }    
?>