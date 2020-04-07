<?php

if(!empty($_POST)){
    $sProduct=$_POST["Product"];
}

if(!empty($_POST)){
    $sSushi=$_POST["Sushi"];
}

//Declaring variables
$fPrijs;
$sProduct;
$sNoodles;
$sSoupBase
$sVegtable
$sSteak
$sSushi;

//Switches, breaks and cases
//Switches and cases for the Product
switch($sProduct){

}

//Switches and cases for the Sushi
switch($sSushi){
    case "CaliR":
        $sSushi="CaliR";
    break;
    case "TempR":
        $sSushi="TempR";
    break;
    case "PhillyR":
        $sSushi="PhillyR";
    break;
    case "Inari":
        $sSushi="Inari";
    break;
    case "RanibowR":
        $sSushi="RainbowR";
    break;
    default:
    $sSushi=0;
    $fPrijs=0;
    break; 
}
switch($sSoupBase)
    case"half-half soup base":
        $sSoupBase="half-half soup base";
    break;
    case"spicy soup base":
        $sSoupBase="spicy soup base";
    break;
    case""

//Start table 
echo("<table border='1'>");
echo("<tr><th>Gekozen product</th><td>'.$sProduct.'</td></tr>");
echo("<tr><th>Noodle smaak</th><td>'.$sSushi.'</td></tr>");
echo("<tr><th>Prijs</th><td>'.$fPrijs.'</td></tr>");
echo("</table>");

?>