<?php
$fname = '';
$adres = '';
$Pcode = '';
$plaats = '';
$Bdatum = '';
$BeOfAf = '';
$Pizza = '';
$hoeveelheid= '';
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $adres = $_POST["adres"];
    $Pcode = $_POST["pcode"];
    $plaats = $_POST["plaats"];
    $Bdatum = $_POST["Bdatum"];
    $BeOfAf = $_POST["BeOfAf"];
    $Pizza = $_POST["pizza"];
    $hoeveelheid = $_POST["hoeveelheid"];
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home of the world's most delicious pizza 🍕🍕🍕</title>
    <link rel="icon" href="pizza.png">
    <link href="pizza.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
</head>

<body>
 <div class=top>
   <h1>pizza di mama. 🍕</h1>
 </div>
   <div class=form>
    <form method=post action="">
    <div class="BeOfAf">
      <label for="BeOfAf">bezorgen of afhalen?</label>
      <br>
      <label>bezorgen</label>
      <input type="radio" name="BeOfAf" value="Bezorgen">
      <label>afhalen</label>
      <input type="radio" name="BeOfAf" value="Afhalen">
      <br>
    </div>
      <div class="fname">
        <label for="fname">Voornaam:</label>
        <br>
        <input type="text" id="fname" name="fname"
          placeholder="Voornaam" value="" required>
        <br>
      </div>
       <div class="adres">
         <label for="adres">Adres:</label>
         <br>
         <input type="text" id="adres" name="adres"
           placeholder="Adres" value="" required>
         <br>
       </div>
        <div class="postcode">
           <label for="Pcode">Postcode:</label>
           <br>
           <input type="text" id="pcode" name="pcode"
             placeholder="Postcode" maxlength="12" value="" required>
           <br>
        </div>
       <div class="plaats">
         <label for="Plaats">Plaats:</label>
         <br>
         <input type="text" id="plaats" name="plaats"
           placeholder="Plaats" maxlength="85" value="" required>
         <br>
       </div>
      <div class="Bdatum">
         <label for="Bdatum">Bestel/afhaal datum:</label>
         <br>
         <input type="date" id="Bdatum" name="Bdatum" required>
      </div>
   <div class="pizza">
      Pizza:
      <br>
       <select name="pizza" required>
         <option value=""<?php if($Pizza==''){ echo "selected";}?>disabled> Maak uw keuze</option>
         <option value="Pi Marg"<?php if($Pizza=='Pi Marg'){ echo "selected";}?>>Pizza Margherita 🌿🍕</option>
         <option value="Pi fung"<?php if($Pizza=='Pi fung'){ echo "selected";}?>>Pizza Fungi 🍄🍕</option>
         <option value="Pi Mari"<?php if($Pizza=='Pi Mari'){ echo "selected";}?>>Pizza Marina 🐟🍕</option>
         <option value="Pi Hawa"<?php if($Pizza=='Pi Hawa'){ echo "selected";}?>>Pizza Hawaii 🍍🍕</option>
         <option value="Pi Quat"<?php if($Pizza=='Pi Quat'){ echo "selected";}?>>Pizza Quattro Formaggi 🧀🍕</option>
       </select>
       <select name="hoeveelheid" required>
        <option value='1'<?php if($hoeveelheid=='1'){ echo "selected";}?>>1</option>
        <option value='2'<?php if($hoeveelheid=='2'){ echo "selected";}?>>2</option>
        <option value='3'<?php if($hoeveelheid=='3'){ echo "selected";}?>>3</option>
        <option value='4'<?php if($hoeveelheid=='4'){ echo "selected";}?>>4</option>
        <option value='5'<?php if($hoeveelheid=='5'){ echo "selected";}?>>5</option>
        <option value='6'<?php if($hoeveelheid=='6'){ echo "selected";}?>>6</option>
        <option value='7'<?php if($hoeveelheid=='7'){ echo "selected";}?>>7</option>
        <option value='8'<?php if($hoeveelheid=='8'){ echo "selected";}?>>8</option>
        <option value='9'<?php if($hoeveelheid=='9'){ echo "selected";}?>>9</option>
        <option value='10'<?php if($hoeveelheid=='10'){ echo "selected";}?>>10</option>
        <option value='∞'<?php if($hoeveelheid=='∞'){ echo "selected";}?>>∞</option>
   </div>
      <br>
      <input type="submit" name="submit" value="gegevens versturen" />
    </form>
 </div>
</body>
<br>

<div class=gegevens>
 <?php
 $date = $Bdatum;
 $newDate = date ('l', strtotime($date));
 

   switch ($Pizza){ 
          case "Pi Marg":
               echo $hoeveelheid .' stuks Pizza Margherita 🌿🍕';
               echo "<br>";
               echo $fname;
               echo "<br>";
               echo $adres;
               echo "<br>";
               echo $Pcode;
               echo "<br>";
               echo $plaats;
               echo "<br>";
               echo $Bdatum;
               echo "<br>";
               echo $newDate;
               echo "<br>";
               if(isset($_POST['submit'])){
                if(!empty($_POST['BeOfAf'])) {
                 echo '  ' . $_POST['BeOfAf'];
                } else {
                 echo 'Geen keuze gemaakt';
                }
              }
          break;
          case "Pi fung":
               echo $hoeveelheid.' stuks Pizza Fungi 🍄🍕 ';
               echo "<br>";
               echo $fname;
               echo "<br>";
               echo $adres;
               echo "<br>";
               echo $Pcode;
               echo "<br>";
               echo $plaats;
               echo "<br>";
               echo $Bdatum;
               echo "<br>";
               echo $newDate;
               echo "<br>";
               if(isset($_POST['submit'])){
                if(!empty($_POST['BeOfAf'])) {
                 echo '  ' . $_POST['BeOfAf'];
                } else {
                 echo 'Geen keuze gemaakt';
                }
              }
          break;
          case "Pi Mari":
               echo $hoeveelheid .' stuks Pizza Marina 🐟🍕 ';
               echo "<br>";
               echo $fname;
               echo "<br>";
               echo $adres;
               echo "<br>";
               echo $Pcode;
               echo "<br>";
               echo $plaats;
               echo "<br>";
               echo $Bdatum;
               echo "<br>";
               echo $newDate;
               echo "<br>";
               if(isset($_POST['submit'])){
                if(!empty($_POST['BeOfAf'])) {
                 echo '  ' . $_POST['BeOfAf'];
                } else {
                 echo 'Geen keuze gemaakt';
                }
              }
          break;
          case "Pi Hawa":
                echo $hoeveelheid .' stuks Pizza Hawaii 🍍🍕 ';
                echo "<br>";
                echo $fname;
                echo "<br>";
                echo $adres;
                echo "<br>";
                echo $Pcode;
                echo "<br>";
                echo $plaats;
                echo "<br>";
                echo $Bdatum;
                echo "<br>";
                echo $newDate;
                echo "<br>";
                if(isset($_POST['submit'])){
                  if(!empty($_POST['BeOfAf'])) {
                   echo '  ' . $_POST['BeOfAf'];
                  } else {
                   echo 'Geen keuze gemaakt';
                  }
              }
          break;
          case "Pi Quat":
                echo $hoeveelheid .' stuks Pizza Quattro Formaggi 🧀🍕 ';
                echo "<br>";
                echo $fname;
                echo "<br>";
                echo $adres;
                echo "<br>";
                echo $Pcode;
                echo "<br>";
                echo $plaats;
                echo "<br>";
                echo $Bdatum;
                echo "<br>";
                echo $newDate;
                echo "<br>";
                if(isset($_POST['submit'])){
                  if(!empty($_POST['BeOfAf'])) {
                   echo '  ' . $_POST['BeOfAf'];
                  } else {
                   echo 'Geen keuze gemaakt';
                  }
              }
          break;
         }
 ?>
</div>
</html>