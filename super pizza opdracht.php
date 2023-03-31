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
<p>pizza di mama</p>
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
 </form>
   
</body>
</html>