<?php
//function to save the array the 'winkelwagen.json' file
function SaveArray($p_aSaveArray) {
    //change string into json compatible data
    $aJSONArray = json_encode($p_aSaveArray);
    //open the file in writing mode
    $file = fopen('winkelwagen.json','w');
    //change the files content of the opened file to what it already was + the new array
    file_put_contents('winkelwagen.json', $aJSONArray);
    //close the file
    fclose($file);
}

//function to load the 'winkelwagen.json' file
function LoadArray() {
    //open the file in reading mode
    $file = fopen('winkelwagen.json','r');
    //get the content of the opened file
    $aJSONArray = file_get_contents('winkelwagen.json');
    //change the read string to php compatible data
    $aReadArray = json_decode($aJSONArray,TRUE);
    //close the file
    fclose($file);
    //save the loaded data to be used in the page
    return($aReadArray);
}

if(!empty($_POST)){
    $sSoupBase      = $_POST['sSoupBaseName'];
    $sVegtable      = $_POST['sVegtableName'];
    $sMeat          = $_POST['sMeatName'];
    $fPrijs         = $_POST['fPrijsSoupBase'];
    $fPrijs         = $fPrijs + $_POST['fPrijsVegtable'];
    $fPrijs         = $fPrijs + $_POST['fPrijsMeat'];
    $aWinkelwagen   = LoadArray();
    $iRecordCounter = count($aWinkelwagen);
    $aWinkelwagen[$iRecordCounter] = array($sSoupBase,$sVegtable,$sMeat,$fPrijs);
    //save the array to the file
    SaveArray($aWinkelwagen);
    header('location: Bestelpage.php');
}
$iTotaal = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./stylesheet/stylesheet.css">
    <title>Instant Noodles</title>
</head>

<body>
<div class="logo">
    <img src="images/logo.PNG">
    <img class="openGif" src="images/open.gif" width="8%">
    <p4></p4>
</div>
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