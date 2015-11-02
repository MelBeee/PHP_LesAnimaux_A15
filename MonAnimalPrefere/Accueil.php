<?php
/**
 * Created by PhpStorm.
 * User: 201356187
 * Date: 2015-10-29
 * Time: 12:45
 */

include_once("Variable.php");


echo "<h1>Resultats obtenus pour ". $NombreParticipant ." participants :</h1>";
echo "<table>";

foreach($NombreVoteAnimaux as $NomAnimal => $nbVote)
{
    if($NombreParticipant !=0)
    {
        $Pourcentage = $nbVote * 100 / $NombreParticipant;
        $Pourcentage = substr($Pourcentage,0,4);
        if($nbVote != 0)
        {
            switch($NomAnimal)
            {
                case "Chien":
                    $backGroundColor = "551A8B";
                    break;
                case "Chat":
                    $backGroundColor = "00FF00";
                    break;
                case "Oiseau":
                    $backGroundColor = "FF0000";
                    break;
                case "Serpent":
                    $backGroundColor = "0000FF";
                    break;
                case "Singe":
                    $backGroundColor = "FFA500";
                    break;
            }
        }
        else
        {
            $backGroundColor ="FFFFFF";
        }
    }

    echo "<tr><td>$NomAnimal</td><td>" . $nbVote ."</td><td>". $Pourcentage . "%</td><td  bgcolor='#$backGroundColor'></td></tr>";
}



echo "</table>";

echo "<a href=/MonAnimalPrefere/Vote.php>Voter</a>";