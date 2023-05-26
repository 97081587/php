<?php 
$bedrag = '';
$percentage = '';
$JaOfVer = '';
$jaar = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

if(isset($_POST["submit"])){
    $bedrag = $_POST["bedrag"];
    $percentage = $_POST["percentage"];
    $JaOfVer = $_POST["JaOfVer"];
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📁</title>
</head>

    <form method=post>
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
                <input type="radio" name="JaOfVer" value="10jaar" required>
                <label>Eindbedrag na 10 jaar</label>
                <br>
                <input type="radio" name="JaOfVer" value="verdubbeld" required>
                <label>Eindbedrag verdubbeld</label>
            </div>
            <br>
        <input type="submit" name="submit" value="Bereken"/>
    </form>

<div class="berekening">
 <?php
    if(isset($_POST['submit'])){
        if ($JaOfVer == '10jaar') {
            echo "<h1>Berekening</h1><br>";
            echo "Het ingelegde bedrag is: " .$bedrag ."<br>";
            echo "Het rentepercentage is: " .$percentage ."%";
            echo "<br>";
            echo "<br>Het eindbedrag na 10 jaar<br>";
            echo "<br>";
            foreach ($jaar as $tijd) {      
                $nwbedrag = $bedrag * (1 + $percentage * $tijd / 100);
                echo "$tijd $nwbedrag <br>";
            }
        }

        if ($JaOfVer == 'verdubbeld') {
            echo "<h1>Berekening</h1><br>";
            echo "Het ingelegde bedrag is: " .$bedrag ."<br>";
            echo "Het rentepercentage is: " .$percentage ."%";
            echo "<br>";
            echo "<br>Het eindbedrag verdubbeld<br>";
            echo "<br>";
            while ($bedrag <= 2) {

                }
            }
        } 
 ?>
</div>
</html>