<?php
$fname = '';
$adres = '';
$Pcode = '';
$plaats = '';
$Bdatum = '';
$BeOfAf = '';
$Pizza = '';
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $adres = $_POST["adres"];
    $Pcode = $_POST["pcode"];
    $plaats = $_POST["plaats"];
    $Bdatum = $_POST["Bdatum"];
    $BeOfAf = $_POST["BeOfAf"];
    $Pizza = $_POST["pizza"];
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
         <input type="date" id="Bdatum" name="Bdatum">
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
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='∞'>∞</option>
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

 $Pizza == ""; 
   switch ($Pizza){ 
          case "Pi Marg":
               echo 'Pizza Margherita 🌿🍕';
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
               echo 'Pizza Fungi 🍄🍕 ';
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
               echo 'Pizza Marina 🐟🍕 ';
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
                echo 'Pizza Hawaii 🍍🍕 ';
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
                echo 'Pizza Quattro Formaggi 🧀🍕 ';
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