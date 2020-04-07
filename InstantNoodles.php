<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./stylesheet/stylesheet.css">
    <title>Instant Noodles</title>
</head>

<body>
<ul style=>
  <li><a href="index.html">Home</a></li>
  <li><a href="HotPot.php">Hot Pot</a></li>
  <li><a href="Sushi.php">Sushi</a></li>
  <li><a href="InstantNoodles.php">Noodles</a></li>
  <li><a href="Bestelpage.php">Bestellen</a></li>
</ul>
<!--How to order noodles-->
<div class="NoodlesTitle">
    <h1>Hier kunt u uw Noodles bestellen!<BR></h1>
</div>
<br>
<!--Images of the noodles-->
<div class="InstantNoodlesRow1">
  <div class="InstantNoodlesColumn1">
    <img src="Images/InstantNoodles2.1.png" alt="Instant Noodles" style="width:100%">
  </div>
  <div class="InstantNoodlesColumn1">
    <img src="Images/InstantNoodles2.2.png" alt="Instant Noodles" style="width:100%">
  </div>
  <div class="InstantNoodlesColumn1">
    <img src="Images/InstantNoodles2.3.png" alt="Instant Noodles" style="width:100%">
  </div>
</div>
<div class="InstantNoodlesRow2">
  <div class="InstantNoodlesColumn2">
    <img src="Images/InstantNoodles2.4.png" alt="Instant Noodles" style="width:100%">
  </div>
  <div class="InstantNoodlesColumn2">
    <img src="Images/InstantNoodles2.5.png" alt="Instant Noodles" style="width:100%">
  </div>
  <div class="InstantNoodlesColumn2">
    <img src="Images/InstantNoodles2.6.png" alt="Instant Noodles" style="width:100%">
  </div>
</div>

<div class="NoodlesSelection">
<form method="post"><br>
  <!--Used to choose the taste that you like-->
    <h3>Maak hieronder u keuze!</h3>
      <select name="Noodles">
          <option value="-">-</option>
          <option value="Seafood">Seafood</option>
          <option value="Duck">Duck</option>
          <option value="Beef">Beef</option>
          <option value="Kimchi">Kimchi</option>
          <option value="Chicken">Chicken</option>
          <option value="Curry">Curry</option>
      </select> <button type="submit"><P>Bestellen</p></button>
  </form>
</div>
  <br>

</body>

</html>