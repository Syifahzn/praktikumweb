<form method="POST" action="">
    <label for=""></label>
    <input type="text" name="input">
    <button type="submit">Submit</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['input']))
    {
        $input = $_POST['input'];
    }
    echo "<h2>Input:</h2>";
    echo "$input</br>";
    echo "<h2>Output:</h2>";

    $panjanginput = strlen($input);

    for($i = 0; $i < $panjanginput; $i++){
        $kapital = strtoupper($input);
        echo $kapital[$i];

        for($j = 1; $j < $panjanginput; $j++){
            $tidakkapital = strtolower($input);
            echo $tidakkapital[$i];
        }
    }
}    
?>

