<form method="POST" action="">
    <div>
        <label for="">Batas Bawah: </label>
        <input type="text" name="bBawah">
    </div>
    <div>
        <label for="">Batas Atas: </label>
        <input type="text" name="bAtas">
    </div>
    <button type="submit">Cetak</button>
</form>

<?php
    $bBawah = NULL;
    $bAtas = NULL;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST['bBawah']))
        {
            $bBawah = $_POST['bBawah'];
        }

        if(isset($_POST['bAtas']))
        {
            $bAtas = $_POST['bAtas'];
        }

        do{
            $hitung = $bBawah + 7;
            if($hitung % 5 == 0){
                echo "<img width='15px' height='15px' src= 'star.png'/> ";
            } else{
                echo "$bBawah ";
            }
            $bBawah++;
        } while ($bBawah <= $bAtas);
    }    
?>