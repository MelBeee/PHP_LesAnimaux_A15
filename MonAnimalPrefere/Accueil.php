<?php
/**
 * Created by PhpStorm.
 * User: 201356187
 * Date: 2015-10-29
 * Time: 12:45
 */

include_once("Variable.php");

echo "<h1>Votre animal prefere</h1>";

echo "<h2>Resultats obtenus pour ". $NombreParticipant ." participants :</h2>";
echo "<table border=\"1\">";

$PlusGrand = 0;
$PlusGrandPourcent = 0;

foreach($NombreVoteAnimaux as $nbVote)
{
    $PlusGrandPourcent = $nbVote * 100 / $NombreParticipant;
    if($PlusGrand < $PlusGrandPourcent)
    {
        $PlusGrand = $PlusGrandPourcent;
    }
}

echo "<tr><td>Animal</td><td>Nombre de Votes</td><td>Pourcentage</td><td  width=\"".$Pourcentage."\">Graphique</td></tr>";

$compteur = 0;

foreach($NombreVoteAnimaux as $NomAnimal => $nbVote)
{
    if($NombreParticipant !=0)
    {
        $Pourcentage = $nbVote * 100 / $NombreParticipant;
        $Pourcentage = substr($Pourcentage,0,4);

        $backGroundColor = $CouleurTableau["Base"][$compteur];

        $compteur++;
    }

    echo "<tr><td>$NomAnimal</td><td>" . $nbVote ."</td><td>". $Pourcentage . "%</td><td ><div  style=\"width:$Pourcentage;height:20px;background-color:$backGroundColor;\"></div></td></tr>";
}

echo "</table>";

echo "<br><br><form action=\"Accueil.php\" method=\"post\">
<input type=\"radio\" name=\"color\" value=\"Bleu\">Bleu<br>
<input type=\"radio\" name=\"color\" value=\"Rouge\">Rouge<br>
<input type=\"radio\" name=\"color\" value=\"Vert\">Vert
</form>";

if(isset($_POST["color"]))
{
    if($_POST["color"] == "bleu")
    {

    }
    else if($_POST["color"] == "rouge")
    {

    }
    else if($_POST["color"] == "bleu")
    {

    }
}

echo "<a href=/MonAnimalPrefere/Vote.php>Voter</a>";
