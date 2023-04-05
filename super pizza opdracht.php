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
</head>

<body>
<h1>pizza di mama 🍕</h1>
  <form method=post action="">
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
      <label for="Bdatum">Besteldatum:</label>
      <br>
      <input type="date" id="Bdatum" name="Bdatum" value="2023-03-15" min="2023-03-15" max="2023-04-24">
   </div>
 <div class="BeOfAf">
   <label for="BeOfAf">bezorgen of afhalen?</label>
   <br>
   <label for="BeOfAf">bezorgen</label>
   <input type="radio" id="BeOfAf" name="BeOfAf"
     placeholder="BeOfAf" value="">
   <label for="BeOfAf">afhalen</label>
   <input type="radio" id="BeOfAf" name="BeOfAf"
     placeholder="BeOfAf" value="">
   <br>
 </div>
<div class="pizza">
      Pizza:
      <br>
    <select name="pizza" required>
      <option value=""<?php if($Pizza==''){ echo "selected";}?>disabled> Maak uw keuze</option>
      <option value="Pi Marg"<?php if($Pizza=='Pi Marg'){ echo "selected";}?>>Pizza Margherita 🍕</option>
      <option value="Pi fung"<?php if($Pizza=='Pi fung'){ echo "selected";}?>>Pizza Fungi 🍕</option>
      <option value="Pi Mari"<?php if($Pizza=='Pi Mari'){ echo "selected";}?>>Pizza Marina 🍕</option>
      <option value="Pi Hawa"<?php if($Pizza=='Pi Hawa'){ echo "selected";}?>>Pizza Hawai 🍕</option>
      <option value="Pi Quat"<?php if($Pizza=='Pi Quat'){ echo "selected";}?>>Pizza Quattro Formaggi 🍕</option>
    </select>
</div>
<br>
<input type="submit" name="submit" value="gegevens versturen" />
</form>  
</body>
<br>
<?php
$Pizza == ""; 
  switch ($Pizza){ 
         case "Pi Marg":
               echo 'Pizza Margherita 🍕 ' .$fname .$adres .$Pcode .$plaats .$Bdatum .$BeOfAf;
         break;
         case "Pi fung":
               echo 'Pizza Fungi 🍕 ' .$fname .$adres .$Pcode .$plaats .$Bdatum .$BeOfAf;
         break;
         case "Pi Mari":
               echo 'Pizza Marina 🍕 ' .$fname .$adres .$Pcode .$plaats .$Bdatum .$BeOfAf;
         break;
         case "Pi Hawa":
                echo 'Pizza Hawaii 🍕 ' .$fname .$adres .$Pcode .$plaats .$Bdatum .$BeOfAf;
         break;
         case "Pi Quat":
                echo 'Pizza Quattro Formaggi 🍕 ' .$fname .$adres .$Pcode .$plaats .$Bdatum .$BeOfAf;
         break;
        }
 ?>
</html>