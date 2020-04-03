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

?>

<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <title>Bestelpagina</title>
</head>
<body>
    <form method="post">
    <Table border="1" class="BestelPageTable">
        <tr>
            <th>Gekozen product</th>
            <td>".$sProduct."</td>
        </tr>
        <tr>
            <th>Prijs</th>
            <td>".$fPrijs."</td>
        </tr>
        <tr>
            <th>Noodle smaak</th>
            <td>".$sNoodles."</td>
        </tr>
    </Table>
    <br>
    <button type="submit"><P>bestellen</P></button> 
    </form>
</body>

</html>