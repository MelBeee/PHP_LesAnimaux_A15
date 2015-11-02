<?php
/**
 * Created by PhpStorm.
 * User: 201356187
 * Date: 2015-10-30
 * Time: 12:03
 */
include_once("Variable.php");

if (isset($_POST["Envoyer"]))
{
    if(isset($_POST["animal"]))
    {
        if (!$handle = fopen($Fichier, 'a')) {
            echo "Impossible d'ouvrir le fichier ($Fichier)";
        }
        $UnVote = $_POST["animal"];
        fwrite($handle, $UnVote . " ");

        header("Location: Accueil.php");
    }

}



echo "<h1>Quel est votre animal favori?</h1>";

echo "<form action='' method='post'>";

echo "<input type='radio' name='animal' value='Chien'>Chien <br>";
echo "<input type='radio' name='animal' value='Chat'>Chat <br>";
echo "<input type='radio' name='animal' value='Oiseau'>Oiseau <br>";
echo "<input type='radio' name='animal' value='Serpent'>Serpent <br>";
echo "<input type='radio' name='animal' value='Singe'>Singe <br>";

echo "<input type='submit' name='Envoyer' value ='Envoyer'>";

echo "</form>";



