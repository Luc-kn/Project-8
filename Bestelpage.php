<?php

if(!empty($_POST)){
    $sProduct=$_POST["Product"];
}

if(!empty($_POST)){
    $sNoodles=$_POST["Noodles"];
}

//Declaring variables
$fPrijs;
$sProduct;
$sNoodles;
$sSoupBase
$sVegtable
$sSteak
//Switches, breaks and cases
//Switches and cases for the Product
switch($sProduct){

}

//Switches and cases for the Noodles
switch($sNoodles){
    case "Seafood":
        $sNoodles="seafood";
    break;
    case "Duck":
        $sNoodles="duck";
    break;
    case "Beef":
        $sNoodles="beef";
    break;
    case "Kimchi":
        $sNoodles="kimchi";
    break;
    case "Chicken":
        $sNoodles="chicken";
    break;
    case "Curry":
        $sNoodles="curry";
    break;
    default:
    $sNoodles=0;
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
echo("<tr><th>Prijs</th><td>'.$fPrijs.'</td></tr>");
echo("<tr><th>Noodle smaak</th><td>'.$sNoodles.'</td></tr>");
echo("</table>");

?>