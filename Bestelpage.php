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
$sMeat
$sSushi;
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

//Switches and cases for the HotPot
switch($sSoupBase){
    case"half-half soup base":
        $sSoupBase="half-half soup base";
    break;
    case"spicy soup base":
        $sSoupBase="spicy soup base";
    break;
    case"normal soup base":
        $sSoupBase="normal soup base";
    break;
    default:
     $sSoupBase=0;
    break;
}
switch($sVegtable){
    case"Chives":
        $sVegtable="Chives";
    break;
    case"Asperges":
        $sVegtable="Asperges";
    break;
    case"union":
        $sVegtable="union";
    break;
    default:
     $sVegtable=0;
    break;
}
switch($sMeat){
    case"Steak":
        $sMeat="Steak";
    break;
    case"chicken":
        $sMeat="chicken";
    break;
    case"pork":
        $sMeat="pork";
    break;
    default:
     $sMeat=0;
    break;
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
    break; 
}
//Start table 
echo("<table border='1'>");
echo("<tr><th>Gekozen product</th><td>'.$sProduct.'</td></tr>");
echo("<tr><th>Prijs</th><td>'.$fPrijs.'</td></tr>");
echo("<tr><th>Sushi</th><td>'.$sSushi.'</td></tr>")
echo("<tr><th>Noodle smaak</th><td>'.$sNoodles.'</td></tr>");
echo("<tr><th>Soup Base</th><td>'.$sSoupBase.'</td></tr>");
echo("<tr><th>Vegtable</th><td>'.$sVegtable.'</td></tr>");
echo("<tr><th>Meat</th><td>'.$sMeat.'</td></tr>");
echo("</table>");

?>