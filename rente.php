<?php 
$bedrag = '';
$percentage = '';
$eindbdrg = '';

if(isset($_POST["submit"])){
    $bedrag = $_POST["bedrag"];
    $percentage = $_POST["percentage"];
    $eindbdrg = $_POST["eindbdrg"];
}
?>

<!DOCTYPE html>
<html lang=nl>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📁</title>
</head>

    <form>
        <div class="bedrag">
            <label for="bedrag">Ingelegd bedrag:</label>
            <input type="number" id="bedrag" name="bedrag" value="" required min="0">
        </div>
            <div class="percentage">
                <label for="percentage">Rentepercentage:</label>
                <input type="number" id="percentage" name="percentage" value="" required min="0">
            </div>
                <br>
            <div class=radio>  
                <input type="radio" name="eindbdrg" value="10jaar" required>
                <label>Eindbedrag na 10 jaar</label>
                <br>
                <input type="radio" name="eindbdrg" value="verdubbeld" required>
                <label>Eindbedrag verdubbeld</label>
            </div>
            <br>
        <input type="submit" name="submit" value="Bereken"/>
    </form>

<?php
    if(isset($_POST['submit'])){
        if ($eindbdrg == '10jaar') {
            $nwbedrag = $bedrag * (1 + $percentage / 100);
            echo $nwbedrag;
      }

        if ($eindbdrg == 'verdubbeld') {
            $nwbedrag = $bedrag * 2;
            echo $nwbedrag;
        } 
    }  
?>
</html>