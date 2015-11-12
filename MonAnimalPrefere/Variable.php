<?php
/**
 * Created by PhpStorm.
 * User: 201356187
 * Date: 2015-10-30
 * Time: 12:52
 */


$Fichier = "SauvegardeVote.txt";
$NombreParticipant= 0;
$Pourcentage = 0;
$NombreVoteAnimaux["Chien"] =0;
$NombreVoteAnimaux["Chat"] =0;
$NombreVoteAnimaux["Oiseau"] =0;
$NombreVoteAnimaux["Serpent"] =0;
$NombreVoteAnimaux["Singe"] =0;

$CouleurTableau["Base"] =   array("551A8B","00FF00","FF0000","0000FF","FFA500", "FFFFFF");
$CouleurTableau["Bleu"] =   array("2F7FAE","2F7FAE","4E96C0","0F6BA2","07507B", "FFFFFF");
$CouleurTableau["Rouge"] =  array("AA3939","FFAAAA","D46A6A","801515","550000", "FFFFFF");
$CouleurTableau["Vert"] =   array("659933","BEE599","8EBF5F","427213","254C00", "FFFFFF");

if($LESVOTES = file_get_contents($Fichier))
{
    $NombreParticipant = substr_count($LESVOTES, ' ') + 1;
    $NombreVoteAnimaux["Chien"] = substr_count($LESVOTES, 'Chien');
    $NombreVoteAnimaux["Chat"] = substr_count($LESVOTES, 'Chat');
    $NombreVoteAnimaux["Oiseau"] = substr_count($LESVOTES, 'Oiseau');
    $NombreVoteAnimaux["Serpent"] = substr_count($LESVOTES, 'Serpent');
    $NombreVoteAnimaux["Singe"] = substr_count($LESVOTES, 'Singe');
}





