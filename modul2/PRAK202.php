<?php
    $nama = "";
    $nim = "";
    $jenis_kelamin = "";
    $pesannama = "";
    $pesannim = "";
    $pesanjenis_kelamin = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["nama"])){
            $pesannama = "Nama tidak boleh kosong";
        } 
        else {
            $nama = $_POST["nama"];
        }

        if(empty($_POST["nim"])){
            $pesannim = "Nim tidak boleh kosong";
        } 
        else {
            $nim = $_POST["nim"];
        }

        if(empty($_POST["jenis_kelamin"])){
            $pesanjenis_kelamin = "Jenis kelamin tidak boleh kosong";
        } 
        else {
            $jenis_kelamin = $_POST["jenis_kelamin"];
        }
    }
?>

<form method="POST" action="">
    <div>
        <label for="">Nama: </label>
        <input type="text" name="nama" value="<?php echo $nama ?>">
        <span style="color:red">*<?php echo $pesannama ?></span><br/>
    </div>
    <div>
        <label for="">Nim: </label>
        <input type="text" name="nim" value="<?php echo $nim ?>">
        <span style="color:red">*<?php echo $pesannim ?></span><br/>
    </div>
    <div>
        <label for="">Jenis Kelamin: </label>
        <span style="color:red">*<?php echo $pesanjenis_kelamin ?></span><br/>
        <input type="radio" name="jenis_kelamin" 
        <?php if(isset($jenis_kelamin) && $jenis_kelamin == "Laki-Laki") echo "checked"; ?>
        value="Laki-Laki">Laki-Laki<br/>
        <input type="radio" name="jenis_kelamin" 
        <?php if(isset($jenis_kelamin) && $jenis_kelamin == "Perempuan") echo "checked"; ?>
        value="Perempuan">Perempuan<br/>
    </div>
    <button type="submit">Submit</button>
</form>

<?php
    if($nama != NULL && $nim != NULL && $jenis_kelamin != NULL) {
        echo "$nama <br/>";
        echo "$nim <br/>";
        echo "$jenis_kelamin <br/>";
    }
?>