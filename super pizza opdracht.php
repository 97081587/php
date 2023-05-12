<?php
$fname = '';
$adres = '';
$Pcode = '';
$plaats = '';
$Bdatum = '';
$BeOfAf = '';
$hoeveelheidMargherita = '';
$hoeveelheidFungi = '';
$hoeveelheidMarina = '';
$hoeveelheidHawaii = '';
$hoeveelheidQFormaggi = '';
$bezorgKosten = 5;
$newDate = date ('l', strtotime($Bdatum));
  $PrijsPMargherita = 12.50;
  $PrijsPFungi = 12.50;
  $PrijsPMarina = 12.50;
  $PrijsPHawaii = 11.50;
  $PrijsPQFormaggi = 14.50;

if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $adres = $_POST["adres"];
    $Pcode = $_POST["pcode"];
    $plaats = $_POST["plaats"];
    $Bdatum = $_POST["Bdatum"];
    $BeOfAf = $_POST["BeOfAf"];
    $hoeveelheidMargherita = $_POST['hoeveelheidMargherita'];
    $hoeveelheidFungi = $_POST['hoeveelheidFungi'];
    $hoeveelheidMarina = $_POST['hoeveelheidMarina'];
    $hoeveelheidHawaii = $_POST['hoeveelheidHawaii'];
    $hoeveelheidQFormaggi = $_POST['hoeveelheidQFormaggi'];
}
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>👩‍🍳Pizza di mama's official website 🍕🍕🍕</title>
    <link rel="icon" href="pizza.png">
    <link href="pizza.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
</head>

<body>
 <div class=top>
   <h1>👩‍🍳 pizza di mama. 🍕</h1>
   <h2 class=est>Est. 2022</h2>
   <hr>
 </div>
   <div class=form>
    <form method=post action="">
        <table>
          <tr>
           <br>
           <th>Soort Pizza: </th>
           <th>Prijs: </th>
           <th>aantal: </th>  
          </tr>
          <tr>
           <td>Pizza Margherita 🌿🍕</td>
           <td><?php echo "€" .$PrijsPMargherita ."0,- "?>
           <select name="hoeveelheidMargherita" required>
           <option value='0'<?php if($hoeveelheidMargherita =='0'){ echo "selected";}?>>0</option>
           <option value='1'<?php if($hoeveelheidMargherita =='1'){ echo "selected";}?>>1</option>
           <option value='2'<?php if($hoeveelheidMargherita =='2'){ echo "selected";}?>>2</option>
           <option value='3'<?php if($hoeveelheidMargherita =='3'){ echo "selected";}?>>3</option>
           <option value='4'<?php if($hoeveelheidMargherita =='4'){ echo "selected";}?>>4</option>
           <option value='5'<?php if($hoeveelheidMargherita =='5'){ echo "selected";}?>>5</option>
           <option value='6'<?php if($hoeveelheidMargherita =='6'){ echo "selected";}?>>6</option>
           <option value='7'<?php if($hoeveelheidMargherita =='7'){ echo "selected";}?>>7</option>
           <option value='8'<?php if($hoeveelheidMargherita =='8'){ echo "selected";}?>>8</option>
           <option value='9'<?php if($hoeveelheidMargherita =='9'){ echo "selected";}?>>9</option>
           <option value='10'<?php if($hoeveelheidMargherita =='10'){ echo "selected";}?>>10</option>
           </td>
          </tr>          
          <tr>
           <td>Pizza Fungi 🍄🍕</td>
           <td><?php echo "€" .$PrijsPFungi ."0,- "?>
           <select name="hoeveelheidFungi" required>
           <option value='0'<?php if($hoeveelheidFungi =='0'){ echo "selected";}?>>0</option>
           <option value='1'<?php if($hoeveelheidFungi =='1'){ echo "selected";}?>>1</option>
           <option value='2'<?php if($hoeveelheidFungi =='2'){ echo "selected";}?>>2</option>
           <option value='3'<?php if($hoeveelheidFungi =='3'){ echo "selected";}?>>3</option>
           <option value='4'<?php if($hoeveelheidFungi =='4'){ echo "selected";}?>>4</option>
           <option value='5'<?php if($hoeveelheidFungi =='5'){ echo "selected";}?>>5</option>
           <option value='6'<?php if($hoeveelheidFungi =='6'){ echo "selected";}?>>6</option>
           <option value='7'<?php if($hoeveelheidFungi =='7'){ echo "selected";}?>>7</option>
           <option value='8'<?php if($hoeveelheidFungi =='8'){ echo "selected";}?>>8</option>
           <option value='9'<?php if($hoeveelheidFungi =='9'){ echo "selected";}?>>9</option>
           <option value='10'<?php if($hoeveelheidFungi =='10'){ echo "selected";}?>>10</option>
           </td> 
          </tr>
          <tr>
           <td>Pizza Marina 🐟🍕</td>
           <td><?php echo "€" .$PrijsPMarina ."0,- "?>
           <select name="hoeveelheidMarina" required>
           <option value='0'<?php if($hoeveelheidMarina =='0'){ echo "selected";}?>>0</option>
           <option value='1'<?php if($hoeveelheidMarina =='1'){ echo "selected";}?>>1</option>
           <option value='2'<?php if($hoeveelheidMarina =='2'){ echo "selected";}?>>2</option>
           <option value='3'<?php if($hoeveelheidMarina =='3'){ echo "selected";}?>>3</option>
           <option value='4'<?php if($hoeveelheidMarina =='4'){ echo "selected";}?>>4</option>
           <option value='5'<?php if($hoeveelheidMarina =='5'){ echo "selected";}?>>5</option>
           <option value='6'<?php if($hoeveelheidMarina =='6'){ echo "selected";}?>>6</option>
           <option value='7'<?php if($hoeveelheidMarina =='7'){ echo "selected";}?>>7</option>
           <option value='8'<?php if($hoeveelheidMarina =='8'){ echo "selected";}?>>8</option>
           <option value='9'<?php if($hoeveelheidMarina =='9'){ echo "selected";}?>>9</option>
           <option value='10'<?php if($hoeveelheidMarina =='10'){ echo "selected";}?>>10</option>
           </td>
          </tr>
          <tr>
           <td>Pizza Hawaii 🍍🍕</td>
           <td><?php echo "€" .$PrijsPHawaii ."0,- "?>
           <select name="hoeveelheidHawaii" required>
           <option value='0'<?php if($hoeveelheidHawaii =='0'){ echo "selected";}?>>0</option>
           <option value='1'<?php if($hoeveelheidHawaii =='1'){ echo "selected";}?>>1</option>
           <option value='2'<?php if($hoeveelheidHawaii =='2'){ echo "selected";}?>>2</option>
           <option value='3'<?php if($hoeveelheidHawaii =='3'){ echo "selected";}?>>3</option>
           <option value='4'<?php if($hoeveelheidHawaii =='4'){ echo "selected";}?>>4</option>
           <option value='5'<?php if($hoeveelheidHawaii =='5'){ echo "selected";}?>>5</option>
           <option value='6'<?php if($hoeveelheidHawaii =='6'){ echo "selected";}?>>6</option>
           <option value='7'<?php if($hoeveelheidHawaii =='7'){ echo "selected";}?>>7</option>
           <option value='8'<?php if($hoeveelheidHawaii =='8'){ echo "selected";}?>>8</option>
           <option value='9'<?php if($hoeveelheidHawaii =='9'){ echo "selected";}?>>9</option>
           <option value='10'<?php if($hoeveelheidHawaii =='10'){ echo "selected";}?>>10</option>
           </td>
          </tr>
          <tr>
            <td>Pizza Quattro Formaggi 🧀🍕</td>
            <td><?php echo "€" .$PrijsPQFormaggi ."0,- "?>
            <select name="hoeveelheidQFormaggi" required>
            <option value='0'<?php if($hoeveelheidQFormaggi =='0'){ echo "selected";}?>>0</option>
            <option value='1'<?php if($hoeveelheidQFormaggi =='1'){ echo "selected";}?>>1</option>
            <option value='2'<?php if($hoeveelheidQFormaggi =='2'){ echo "selected";}?>>2</option>
            <option value='3'<?php if($hoeveelheidQFormaggi =='3'){ echo "selected";}?>>3</option>
            <option value='4'<?php if($hoeveelheidQFormaggi =='4'){ echo "selected";}?>>4</option>
            <option value='5'<?php if($hoeveelheidQFormaggi =='5'){ echo "selected";}?>>5</option>
            <option value='6'<?php if($hoeveelheidQFormaggi =='6'){ echo "selected";}?>>6</option>
            <option value='7'<?php if($hoeveelheidQFormaggi =='7'){ echo "selected";}?>>7</option>
            <option value='8'<?php if($hoeveelheidQFormaggi =='8'){ echo "selected";}?>>8</option>
            <option value='9'<?php if($hoeveelheidQFormaggi =='9'){ echo "selected";}?>>9</option>
            <option value='10'<?php if($hoeveelheidQFormaggi =='10'){ echo "selected";}?>>10</option>
           </td>
          </tr>  
        </table>
    <div class="BeOfAf">
      <label for="BeOfAf">bezorgen of afhalen?</label>
      <br>
      <label>bezorgen</label>
      <input type="radio" name="BeOfAf" value="Bezorgen" required>
      <label>afhalen</label>
      <input type="radio" name="BeOfAf" value="Afhalen" required>
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
         <input type="date" id="Bdatum" name="Bdatum"  min="<?php echo date("Y-m-d"); ?>" required>
      </div>
      <br>
      <input type="submit" name="submit" value="gegevens versturen" />
    </form>
 </div>
</body>
<br>

<div class=gegevens>
 <?php
 if(isset($_POST['submit'])){
    $newDate = date ('l', strtotime($Bdatum));

  if ($newDate == 'Monday') {
      $PrijsPMargherita = 7.50;
      $PrijsPFungi = 7.50;
      $PrijsPMarina = 7.50;
      $PrijsPHawaii = 7.50;
      $PrijsPQFormaggi = 7.50;
  }  
  if ($BeOfAf == 'Bezorgen') {
    $totaalprijs = $PrijsPMargherita * $hoeveelheidMargherita +  $PrijsPFungi * $hoeveelheidFungi + $PrijsPMarina * $hoeveelheidMarina + $PrijsPHawaii * $hoeveelheidHawaii + $PrijsPQFormaggi * $hoeveelheidQFormaggi + $bezorgKosten;
  }
  if ($BeOfAf == 'Afhalen') {
    $totaalprijs = $PrijsPMargherita * $hoeveelheidMargherita +  $PrijsPFungi * $hoeveelheidFungi + $PrijsPMarina * $hoeveelheidMarina + $PrijsPHawaii * $hoeveelheidHawaii + $PrijsPQFormaggi * $hoeveelheidQFormaggi;
  }
  if ($newDate == 'Friday' && $totaalprijs > 20) {
    $totaalprijs = $totaalprijs - 15 * ($totaalprijs / 100);
  } 
  
      echo $hoeveelheidMargherita .' stuks Pizza Margherita 🌿🍕';
      echo "<br>";
      echo $hoeveelheidFungi .' stuks Pizza Fungi 🍄🍕';
      echo "<br>";
      echo $hoeveelheidMarina .' stuks Pizza Marina 🐟🍕';
      echo "<br>";
      echo $hoeveelheidHawaii .' stuks Pizza Hawaii 🍍🍕';
      echo "<br>";
      echo $hoeveelheidQFormaggi .' stuks Pizza Quattro Formaggi 🧀🍕	';
      echo "<br>";
      echo "€" .$totaalprijs .",-";
      echo "<br>";
      echo 'Voornaam: '.$_POST['fname'];
      echo "<br>";
      echo 'Adres: '.$_POST['adres'];
      echo "<br>";
      echo 'Postcode: '.$_POST['pcode'];
      echo "<br>";
      echo 'Plaats: '.$_POST['plaats'];
      echo "<br>";
      echo 'Bestel/afhaal datum: '.$_POST['Bdatum'];
      echo "<br>";
      echo $newDate;
      echo "<br>";
     echo $_POST['BeOfAf'];
    }
 ?>
</div>
</html>